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
- [a~='b'] the co thuoc tinh `a` co gia tri `b`; voi `b` co the o bat ky vi tri nao nhung phai cach ky tu khac 1 space;
- [a$='b'] thuoc tinh `a` co chua `b` o cuoi chuoi gia tri
- [a='b'] thuoc tinh `a` co gia tri `b`, voi `b` la duy nhat
- [a!='b'] thuoc tinh a co gia gia tri khac `b`, voi `b` la duy nhat
- [a^='b'] thuoc tinh `a` co chua `b` o start cua chuoi gia tri - khong co space
- [a] kiem tra phan tu chua thuoc tinh `a` ko -[a='b'][c='d'] phan tu co thuoc tinh `a`='b' va thuoc tinh `c`='d'

## CHILD FILTERS

- `tag:first-child` phan tu con dau tien cua the tag
- `tag:first-of-type` phan tu dau tien theo kieu cua tag;
- `tag:last-child` va `tag:last-of-type`
- `tag:nth-child(val)` phan tu con thu val
- `tag:nth-last-child(val)` lay phan tu tu cuoi len theo vi tri val (val=2n; 2n+1) -`tag:nth-last-of-type(val)` lay phan tu tu cuoi len theo kieu node
- `tag:nth-last-of-type(val)`
- `tag:nth-of-type(val)`
- `tag:only-child` chi co 1 child
- `tag:only-of-type(val)` chi co 1 element theo type
