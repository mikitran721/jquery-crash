# jQuery basic gom:

- jQuery()
  - .ready(); .css(); .addClass(); .appendTo(); .click(); .html(); .text(). jQuery.noConlict()
- ready() tuong ung voi `<body onload='function()'>`

# Core - Utility

- .contains(); each(); extend(); globalEval(); grep(); inArray(); isArray(); isEmptyObject(); isFunction(); isNumeric(); isPlainObject(); isWindow(); isXMLDoc(); makeArray(); map(); merge(); noop(); now(); parseHTML();.parseJSON();.type(); .unique(); .parseXML();
- $.parseJSON(json): chuyen json sang js
- $.unique(): loai bo cac phan tu trung lap;

# SELECTORS

## SELECTORS - BASIC

- dad>boy
- prev+next
- prev~sibling

## SELECTORS - BASIC FILTERS

- `:eq(index)` chon theo vi tri index-tinh tu 0
- `:even` so chan; `:odd` so le
- `:header` lien quan toi cac the h1->h6
- `:not(tag1,tag2)` khong lay phan tu nao do
- `:root()` tuong ung the html

## CONTENT FILTERS

- `tag:contains("text")` kiem tra text co trong tag ko
- `tag:empty()` lay phan tu khong co noi dung; 1 space cung la 1 ky tu.
- `tag:has(tagName)` co phan tu con la tagName ko
- `tag:parent()` co phai la node cha ko; child co the la content|node item.

## VISIBILITY FILTERS

- $.show(val); $.hide(val) hien/an phan tu theo val giay (1000=1s)
- $(tag:hidden); $(tag:visible) hien thi so phan tu an/hien theo node-tag

## ATTRIBUTES - SELECTORS

- [name |= "value"] phan tu voi thuoc tinh name=value hoac value- --> dieu kien 'value' phai dung dau;

- [name*='value'] phan tu cua chua attribute 'name' co chua 'value'; gia tri nay co the nam bat ky noi dau
