/**
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
jQuery(function(e){var t=e("div#treeselectmenu").html();e(".treeselect li").each(function(){$li=e(this);$div=$li.find("div.treeselect-item:first");$li.prepend('<span class="pull-left icon-"></span>');$div.after('<div class="clearfix"></div>');if($li.find("ul.treeselect-sub").length){$li.find("span.icon-").addClass("treeselect-toggle icon-minus");$div.find("label:first").after(t);if(!$li.find("ul.treeselect-sub ul.treeselect-sub").length){$li.find("div.treeselect-menu-expand").remove()}}});e("span.treeselect-toggle").click(function(){$i=e(this);if($i.parent().find("ul.treeselect-sub").is(":visible")){$i.removeClass("icon-minus").addClass("icon-plus");$i.parent().find("ul.treeselect-sub").hide();$i.parent().find("ul.treeselect-sub span.treeselect-toggle").removeClass("icon-minus").addClass("icon-plus")}else{$i.removeClass("icon-plus").addClass("icon-minus");$i.parent().find("ul.treeselect-sub").show();$i.parent().find("ul.treeselect-sub span.treeselect-toggle").removeClass("icon-plus").addClass("icon-minus")}});e("#treeselectfilter").keyup(function(){var t=e(this).val().toLowerCase();var n=0;e("#noresultsfound").hide();var r=e(".treeselect li");r.each(function(){if(e(this).text().toLowerCase().indexOf(t)==-1){e(this).hide();n++}else{e(this).show()}});if(n==r.length){e("#noresultsfound").show()}});e("#treeCheckAll").click(function(){e(".treeselect input").attr("checked","checked")});e("#treeUncheckAll").click(function(){e(".treeselect input").attr("checked",false)});e("#treeExpandAll").click(function(){e("ul.treeselect ul.treeselect-sub").show();e("ul.treeselect span.treeselect-toggle").removeClass("icon-plus").addClass("icon-minus")});e("#treeCollapseAll").click(function(){e("ul.treeselect ul.treeselect-sub").hide();e("ul.treeselect span.treeselect-toggle").removeClass("icon-minus").addClass("icon-plus")});e("a.checkall").click(function(){e(this).parents().eq(5).find("ul.treeselect-sub input").attr("checked","checked")});e("a.uncheckall").click(function(){e(this).parents().eq(5).find("ul.treeselect-sub input").attr("checked",false)});e("a.expandall").click(function(){var t=e(this).parents().eq(6);t.find("ul.treeselect-sub").show();t.find("ul.treeselect-sub span.treeselect-toggle").removeClass("icon-plus").addClass("icon-minus")});e("a.collapseall").click(function(){var t=e(this).parents().eq(6);t.find("li ul.treeselect-sub").hide();t.find("li span.treeselect-toggle").removeClass("icon-minus").addClass("icon-plus")})})
