;location.pathname==="/battle" && (function(undefined) {

var
	ws,
$$;

(function __construct() {
	ws = new WebSocket("ws://localhost:1337", "protocolOne");
	ws.addEventListener("open", open);
	ws.addEventListener("message", message);
})();

function open(e) {
	console.log("OPEN!");
	ws.send("Connection all good!");
}

function message(e) {
	console.log(e.data);
}

})();