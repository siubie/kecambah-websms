<script language="JavaScript" type="text/javascript">
	dojo.require('dojox.widget.AnalogGauge');
	dojo.require('dojox.widget.gauge.AnalogArrowIndicator');
	function init() {
	gauge = dojo.byId("batteryGauge");
	gauge = new dojox.widget.AnalogGauge({
		id: "batteryGauge",
		width: 175,
		height: 100,
		cx: 130,
		cy: 100,
		radius: 70,
		startAngle: -90,
		endAngle: 15,
		useTooltip: false,
		background: {color: "white"},
		ranges: [ {low:0, high:2, hover:'0 - 2', color: "red"},
			   {low:2, high:7, hover:'2 - 7', color: "yellow"},
			   {low:7, high:10, hover:'7 - 10', color: "green"}
			 ],
		minorTicks: {
			offset: 70,
			interval: 1,
			length: 5,
			color: 'gray'
		},
		majorTicks: {
			offset: 70,
			interval: 2,
			length: 10
		}
	}, gauge);
	gauge.startup();
	var bat = new dojox.widget.gauge.AnalogArrowIndicator({
		value:3,
		width: 1,
		dragRestriction: true,
		easing: dojo.fx.easing.bounceOut
		});
	gauge.addIndicator(bat);

	gauge = dojo.byId("signalGauge");
	gauge = new dojox.widget.AnalogGauge({
		id: "signalGauge",
		width: 175,
		height: 100,
		cx: 130,
		cy: 100,
		radius: 70,
		startAngle: -90,
		endAngle: 15,
		useTooltip: false,
		background: {color: "white"},
		ranges: [ {low:0, high:2, hover:'0 - 2', color: "red"},
			   {low:2, high:6, hover:'2 - 6', color: "yellow"},
			   {low:6, high:9, hover:'6 - 9', color: "green"}
			 ],
		minorTicks: {
			offset: 70,
			interval: 1,
			length: 5,
			color: 'gray'
		},
		majorTicks: {
			offset: 70,
			interval: 3,
			length: 10
		}
	}, gauge);
	gauge.startup();
	var sig = new dojox.widget.gauge.AnalogArrowIndicator({
		value:3,
		width: 1,
		dragRestriction: true,
		easing: dojo.fx.easing.bounceOut
		});
	gauge.addIndicator(sig);
	bat.update(<? echo ($phone['Battery'] / 10); ?>);
	sig.update(<?=$phone['Signal']?>);
	setInterval((function(b, s){
		return (function(){
			b.update(<?echo ($phone['Battery'] / 10); ?>);
			s.update(<?=$phone['Signal']?>);
		});
	})(bat, sig), 10000);
	}
	dojo.addOnLoad(init);
</script>