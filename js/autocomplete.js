$(function() {
		$.extend($.ui.autocomplete.prototype, {
			_renderItem : function(ul, item) {
				var term = this.element.val(), html = item.label.replace(term,
						"<b>" + term + "</b>");
				return $("<li></li>").data("item.autocomplete", item).append(
						$("<a></a>").html(html)).appendTo(ul);
			}
		});

		var availableTags = [];

		$("#languages option").each(function() {
			availableTags.push($(this).text());
		});

		$("#suggestions").autocomplete({
			source : availableTags,
			delay : 0
		});
	});