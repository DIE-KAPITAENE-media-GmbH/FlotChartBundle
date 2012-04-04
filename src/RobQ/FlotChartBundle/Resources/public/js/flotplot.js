FlotPlot = function () {
    this.initialize.apply(this, arguments);
};

$.extend(FlotPlot.prototype, {
    plotPlaceholder:null,
    plotPlaceholderOverview:null,
    plotPlaceholderLegend:null,

    plotContainer:null,
    plotContainerOverview:null,

    rawdata:null,
    plotdata:null,

    rawoptions:null,
    plotoptions:null,

    overview:false,
    choiceLegend:false,
    choiceLegendFormatter:false,

    initialize:function (placeholder, data, options, events, overview, legend, legendFormatter) {

        this.plotdata = this.rawdata = data;
        this.plotoptions = this.rawoptions = options;
        this.overview = overview;
        this.choiceLegend = legend;
        this.choiceLegendFormatter = legendFormatter;

        if (options.xaxis.tickFormatter) {
            options.xaxis.tickFormatter = eval(options.xaxis.tickFormatter);
        }

        if (options.yaxis.tickFormatter) {
            options.yaxis.tickFormatter = eval(options.yaxis.tickFormatter);
        }

        this.plotPlaceholder = $('#' + placeholder);

        if (this.overview) {
            this.plotPlaceholderOverview = $('#' + placeholder + '_overview');
        }

        if (this.choiceLegend) {
            this.plotPlaceholderLegend = $('#' + placeholder + '_legend');
            this.createChoiceLegend();
        }

        // Events
        var self = this;
        $.each(events, function (placeholder, event) {
            $.each(event, function (event, method) {
                switch (placeholder) {
                    case "plot":
                        self.plotPlaceholder.bind(event, eval(method).bind(self));
                        break;
                    case "overview":
                        if (self.overview) {
                            self.plotPlaceholderOverview.bind(event, eval(method).bind(self));
                        }
                        break;
                    case "legend":
                        if (self.choiceLegend) {
                            self.plotPlaceholderLegend.bind(event, eval(method).bind(self));
                        }
                        break;
                }
            });
        });
    },

    optionsForOverview:function () {
        return {
            series:{
                lines:{ show:true, lineWidth:1 },
                shadowSize:0
            },
            xaxis:{ ticks:[], mode:"time" },
            yaxis:{ ticks:[], autoscaleMargin:0.1 },
            selection:{ mode:"x" },
            legend:{ show:false }
        };
    },

    createChoiceLegend:function () {

        var self = this;
        var i = 0;
        $.each(this.rawdata, function (key, val) {
            var jQAppend = self.choiceLegendFormatter(key, val, self.rawoptions);
            jQAppend.appendTo(self.plotPlaceholderLegend);
        });

        this.plotPlaceholderLegend.find("input").change(this.plotChart.bind(this));
    },

    plotDataAccordingToChoiceLegend:function () {
        var self = this;
        this.plotdata = [];
        this.plotPlaceholderLegend.find("input:checked").each(function () {
            var key = this.name;

            for (var i = 0; i < self.rawdata.length; i++) {
                if (self.rawdata[i].label === key) {
                    self.plotdata.push(self.rawdata[i]);
                    return true;
                }
            }
        });
    },

    plotChart:function () {

        if (this.choiceLegend) {
            this.plotDataAccordingToChoiceLegend();
        }

        // Chart
        this.plotContainer = $.plot(this.plotPlaceholder, this.plotdata, this.plotoptions);

        // Overview
        if (this.overview) {
            this.plotContainerOverview = $.plot(this.plotPlaceholderOverview, this.plotdata, this.optionsForOverview());
        }
    },


    //Flot Plugins
    //----------------------------------------------------------------

    plotselected:function (event, ranges) {
        this.plotoptions = $.extend(true, {}, this.rawoptions, {
            xaxis:{ min:ranges.xaxis.from, max:ranges.xaxis.to },
            yaxis:{ min:ranges.yaxis.from, max:ranges.yaxis.to }
        })

        this.plotChart();

        if (this.overview) {
            // don't fire event on the overview to prevent eternal loop
            this.plotContainerOverview.setSelection(ranges, true);
        }
    },

    plotselected_overview:function (event, ranges) {
        this.plotContainer.setSelection(ranges);
    },

    plotselected_dblclick_overview:function () {
        this.plotoptions = this.rawoptions;
        this.plotChart();
    }
});
