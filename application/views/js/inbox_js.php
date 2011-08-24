<style>
@import "<?=base_url("assets/dojo/dijit/themes/claro/claro.css")?>";
@import "<?=base_url("assets/dojo/dojox/grid/enhanced/resources/claroEnhancedGrid.css")?>";
</style>

<script type="text/javascript">
dojo.require("dojox.grid.EnhancedGrid");
dojo.require("dojox.grid.enhanced.plugins.Filter");
dojo.require("dojo.data.ItemFileReadStore");
dojo.require("dojo.data.ItemFileWriteStore");
dojo.require("dojox.data.JsonRestStore");

var layout = [{
	defaultCell: {
		editable: false, sortDesc: true, type: dojox.grid.cells._Widget, autoComplete:true
	},
	cells:
	[
		//5 kinds of datatype: string, number, date, time, boolean
		{ field: "ReceivingDateTime", name:"Tanggal", datatype:"date"},
		{ field: "SenderNumber", name:"Dari", datatype:"string"},
		{ field: "TextDecoded", name:"Isi Pesan", datatype:"string"},
		{ field: "Flag", name:"Flag", datatype:"number"}
	]
}];
var plugins = {
	filter: {
		itemsName: 'TextDecoded',
		closeFilterbarButton: false,
		ruleCount: 8
	}
};
var jsonInbox = new dojox.data.JsonRestStore({target: "<?=site_url("inbox/jsonInbox")?>", syncMode:true, loadLazyValues:false});
//var jsonInbox = < ?=site_url("inbox/jsonInbox")?>;

dojo.ready(function(){
	dojo.connect(dijit.byId("grid"), "onFilterDefined", function(rules, rel){
	console.log("Filter changed: ", rules, rel);
	});
});
</script>