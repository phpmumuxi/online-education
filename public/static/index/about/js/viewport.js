/**
 * @version 1.00
 * @author  焦质晔
 * @update  2014-08-01
 */
var ViewPort = function(){
	this.init.apply(this, arguments)
}
ViewPort.prototype = {
	version: "1.00",
	author: "jzy",
	init: function(options){
		this.viewId = options.viewPortId;
		this.magnId = options.magnifyId;
		this.posArr = options.initPosArr;

		var thisTemp = this;

		var aView = PG._$(this.viewId);
		var aMagn = PG._$(this.magnId);

		var aMagnImg = PG.GT(aMagn, 'img')[0];
		
		PG.setStyle(aMagn, {top: this.posArr[0] + 'px', left: this.posArr[1] + 'px'});
		PG.setStyle(aMagnImg, {position: 'absolute', top: this.posArr[2] + 'px', left: this.posArr[3] + 'px'});
		
		PG.addEvent(aView, 'mousemove', function(e){
			fn.call(this, e)
		});
		
		var viewWid = PG.width(aView),  viewHei = PG.height(aView), magnWid = 188;
		
		function fn(e){
			var x = parseInt(PG.E(e).x - PG.getPosition(aView)[0]);
			if (x < (magnWid / 2) || x > (viewWid - magnWid / 2)){
				return
			} else {
				var iLen = (- x * 1.28 + 120) > 0 ? Math.ceil(- x * 1.28 + 200) : Math.floor(- x * 1.28 + 120);
				PG.StartMove(aMagnImg, {left: iLen}, PG.MOVE_TYPE.BUFFER);
				PG.StartMove(aMagn, {left: x - 80}, PG.MOVE_TYPE.BUFFER);
			}
		}
	}
}