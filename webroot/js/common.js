var CP={
	init:function(){
		$("body").addClass("js");
		CP.Features.init();
		CP.Util.equalize("#meta>div");
	},
	Features:{
		init:function(){
			Tabs.init($(".panels"));
		}
	},
	Util:{
		equalize:function(selector){
			var maxHeight=1;
			$(selector).each(function(){
				if (this.offsetHeight > maxHeight) {
					maxHeight = this.offsetHeight;
				}
			});
			$(selector).css("height",maxHeight+"px");
		}
	}
}

var Tabs={
	container:null,
	panels:Array(),
	init:function(container){
		Tabs.container=$(container);
		$('.panel',Tabs.container).each(
			function(i){
				var newPanel={};
				newPanel.element=this;
				newPanel.id=this.id;
				newPanel.index=i;
				newPanel.title=$('h2',this)[0];
				newPanel.tab=Tabs.createTab(newPanel);
				Tabs.panels[i]=newPanel;
			}
		)
		Tabs.createTabsBar();
		Tabs.showPanel(Tabs.panels[0]);
	},
	createTab:function(panel){
		var tab=document.createElement("li");
		var tabLink=document.createElement("a");
		tabLink.innerHTML=panel.title.innerHTML;
		tabLink.href="#"+panel.id;
		$(tabLink).click(function() {Tabs.showPanel(panel); return false;})
		tab.appendChild(tabLink);
		return tab;
	},
	createTabsBar:function(){
		var tabsParent=$(".tab-container")[0];
		var ul=document.createElement("ul");
		$(Tabs.panels).each(function(){ ul.appendChild(this.tab); });
		var tabBar=document.createElement("div");
		tabBar.className="tabs";
		tabBar.appendChild(ul);
		tabsParent.appendChild(tabBar);

		next=document.createElement("a");
		next.className="next";
		next.innerHTML="&raquo;";
		next.href="#";
		$(next).click(function() {Tabs.showNextPanel(); return false;})

		previous=document.createElement("a");
		previous.className="previous";
		previous.innerHTML="&laquo;";
		previous.href="#";
		$(previous).click(function() {Tabs.showPreviousPanel(); return false;})



		tabBar.appendChild(next);
		tabBar.appendChild(previous);

	},
	showNextPanel:function(){
		if (Tabs.activePanelIndex<(Tabs.panels.length-1)){
			nextIndex=Tabs.activePanelIndex+1;
		}else{
			nextIndex=0;
		}
		Tabs.showPanel(Tabs.panels[nextIndex]);
	},
	showPreviousPanel:function(){
		if (Tabs.activePanelIndex>(0)){
			nextIndex=Tabs.activePanelIndex-1;
		}else{
			nextIndex=Tabs.panels.length-1;
		}
		Tabs.showPanel(Tabs.panels[nextIndex]);
	},
	showPanel:function(panel){
		var l = ($(".tab-container")[0].clientWidth)*panel.index;
		Tabs.container.animate({left:"-"+l+"px"},"slow","easeboth");
		Tabs.activeTab(panel.tab);
		Tabs.activePanelIndex=panel.index;
	},
	activeTab:function(tab){
		$("#features li.active").each(function(){$(this).removeClass("active")});
		tab.className="active";
		$(tab).DropInUp(250);
	}

}


$(document).ready(function(){
	CP.init()
});