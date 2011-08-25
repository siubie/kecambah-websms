<script type="text/javascript">
dojo.require("dojox.grid.EnhancedGrid");
dojo.require("dojox.grid.enhanced.plugins.Filter");
dojo.require("dojo.data.ItemFileReadStore");

var layout = [
		//5 kinds of datatype: string, number, date, time, boolean 'ReceivingDateTime, SenderNumber, TextDecoded, Flag'
		{ field: "ReceivingDateTime", name:"Tanggal", datatype:"string"},
		{ field: "SenderNumber", name:"Pengirim", datatype:"string"},
		{ field: "TextDecoded", name:"Isi Pesan", datatype:"string"},
		{ field: "Flag", name:"Flag", datatype:"string"}
	];

var plugins = {
	filter: {
		itemsName: 'TextDecoded',
		closeFilterbarButton: false,
		ruleCount: 1
	}
};
var jsonInbox = new dojo.data.ItemFileReadStore({url: "<?=site_url('inbox/jsonInbox')?>"});
dojo.ready(function(){
	dojo.connect(dijit.byId("gridInbox"), "onFilterDefined", function(rules, rel){
		console.log("Filter changed: ", rules, rel);
	});
});
</script>