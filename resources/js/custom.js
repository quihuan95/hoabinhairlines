function ChangeToSlug(title) {
    //  var title, slug;
    var slug;
    //Lấy text từ thẻ input title
    //  title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();
    console.log(slug);

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    return slug;
}


(function ($) {
    "use strict";

    var toc = function (options) {
        return this.each(function () {
            var root = $(this),
                data = root.data(),
                thisOptions,
                stack = [root],
                listTag = this.tagName,
                currentLevel = 0,
                headingSelectors;


            thisOptions = $.extend(
                { content: "body", headings: "h2,h3,h4,h5" },
                { content: data.toc || undefined, headings: data.tocHeadings || undefined },
                options
            );
            headingSelectors = thisOptions.headings.split(",");

            $(thisOptions.content).find(thisOptions.headings).attr("id", function (index, attr) {

                var generateUniqueId = function (text) {


                    if (text.length === 0) {
                        text = "?";
                    }

                    /*   var baseId = text.replace(/\s+/g, "_"), suffix = "", count = 1;

                    while (document.getElementById(baseId + suffix) !== null) {
                    suffix = "_" + count++;
                    }

                    return baseId + suffix; */
                    return ChangeToSlug(text);
                };

                return attr || generateUniqueId($(this).text());
            }).each(function () {

                var elem = $(this), level = $.map(headingSelectors, function (selector, index) {

                    return elem.is(selector) ? index : undefined;
                })[0];

                if (level > currentLevel) {

                    var parentItem = stack[0].children("li:last")[0];
                    if (parentItem) {
                        stack.unshift($("<" + listTag + "/>").appendTo(parentItem));
                    }
                } else {

                    stack.splice(0, Math.min(currentLevel - level, Math.max(stack.length - 1, 0)));
                }
                console.log('level', level);
                // Add the list item
                $("<li/>").appendTo(stack[0]).append(
                    $("<a/>").text(elem.text()).attr("href", window.location.href+"#" + elem.attr("id"))
                );

                currentLevel = level;
            });
        });
    }, old = $.fn.toc;

    $.fn.toc = toc;

    $.fn.toc.noConflict = function () {
        $.fn.toc = old;
        return this;
    };

    // Data API
    $(function () {
        toc.call($("[data-toc]"));
    });
} (window.jQuery));


$(document).ready(function () {

    $(".news-description-detail table").wrap('<div style="width: 100%; overflow:scroll;"></div>');

    if ($(".news-description-detail h2").length > 0) {
        $(".news-description-detail").prepend("<div id='louis-neo-menu'><a class='collapse-button' data-toggle='collapse' data-target='#louis-neo-list'><i class='fa fa-bars'></i> Nội dung bài viết</a><ol id='louis-neo-list' class='collapse'></ol></div>");
        $("#louis-neo-list").toc({ content: ".news-description-detail", headings: "h2,h3,h4,h5" });
    }
});

