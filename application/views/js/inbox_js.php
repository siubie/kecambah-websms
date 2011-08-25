<script type="text/javascript">
dojo.require("dojox.grid.EnhancedGrid");
dojo.require("dojox.grid.enhanced.plugins.Filter");
dojo.require("dojo.data.ItemFileReadStore");
dojo.require("dojo.data.ItemFileWriteStore");

var grid = null,
	connecter = [];
var gridArgs = {
};

var layout = [[
		//5 kinds of datatype: string, number, date, time, boolean 'ReceivingDateTime, SenderNumber, TextDecoded, Flag'
		{ field: "ReceivingDateTime", name:"Tanggal", datatype:"string"},
		{ field: "SenderNumber", name:"Pengirim", datatype:"string"},
		{ field: "TextDecoded", name:"Isi Pesan", datatype:"string"},
		{ field: "Flag", name:"Flag", datatype:"string"}
	]];

var plugins = {
	filter: {
		closeFilterbarButton: false,
		ruleCount: 1
	}
};
var data = {<?=$inbox?>};
//var jsonInbox = new dojo.data.ItemFileWriteStore({url: "< ?=site_url('inbox/jsonInbox')?>"});
var jsonInbox = new dojo.data.ItemFileReadStore({data:data});

dojo.addOnLoad(function() {
	dojo.connect(dojo._listener, "add", function(obj, event, context, method){
		connecter.push([obj, event, context, method]); // Handle
	});

	grid = new dojox.grid.EnhancedGrid(
		dojo.mixin({
			id: "grid",
			store: jsonInbox,
			structure: layout,
			plugins : plugins
		}, gridArgs));

	dojo.byId("gridContainer").appendChild(grid.domNode);
	grid.startup();
});
</script>