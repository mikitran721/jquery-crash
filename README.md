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

# FORM SELECTOR

- `formName:input` tap hop cac input trong form

- co the lua chon input theo dang `formName [name='inputName']`
- `formName :radio[name='radioName']` su dung ket hop `:checked` de lay gia tri o lua chon
- `:disabled` vs `:enabled`
- `checkall` vs `un-checkall`
- khi su dung dong thoi `.attr()` va `.removeAttr()` se bi loi khong dung voi muc dich su dung; nen chuyen sang su dung `.prop()` va `.removeProp()`;
  - neu van bi loi thi su dung lai `.prop(attr,value)` de gan lai gia tri

# TRAVERSING ~ SELECTORS

- la 1 dang selectors su dung phuong thuc (method)
- `.eq(index) | .eq(-index)` lay 1 phan tu trong tap hop cac phan tu; index tu 0
- `.filter()` lay ra 1 tap hop cac phan tu trong 1 tap hop cac phan tu
- `.first() | .last()`
- `.has(element) | .has(selector)` the co chua phan thu ben trong
- `.is(element)` kiem ta co la element khong; vd: p, div
- `.map(callback)` lap qua cac phan tu con
- `.not()` nguoc voi `.eq()`
- `.slice(start[,end])` lay phan tu tu start toi end

## TRAVERSING - TREE

- `.children([selector])`
- `.closest(selector) | .closest(element) | .closest(jQueryObj)` phan tu bao ngoai
- `.find(element|selector|jqueryObj)` tim all phan tu thoa dieu kien (chau-con)
- `.next([selector])` lay phan tu ke ben phan tu thoa dieu kien
- `.nextAll([selector])` lay all phan tu ke ben
- `.nextUntil([element][,filter])` lay phan tu ke ben cho toi khi gap dieu kien thi dung
- `.parent([seletor])` lay phan tu bao boc phan tu lua chon
- `.parents([selector])` lay tap hop phan tu cha theo selector hoac la tap hop all of parent cua the duoc chon.
- `.pev(); .prevAll(); .prevUnitl()`
- `.siblings([selector])` phan tu cung cap voi item danh dau
- `.addBack([selector])` them phan tu bao boc (parent) vao phan tu duoc danh dau.

## MISCELLANEOUS TRAVERSING

- `.add()` them phan tu moi vao 1 tap hop danh dau co san
- `.contents()` lay ra 1 tap hop cac phan tu nodeText+element+comments
- `.each(function(i,elm))` duyet qua cac phan tu
- `.end()` ket thuc lua chon & lua chon tiep phan tu khac.

# ATTRIBUTES

- `.attr(attributeName) .attr(attributeName,value) .attr(attributeName,function(index,attr))` lay gia tri attr chi dinh; gan gia tri cho attr; voi function -> lay ra attr cua 1 tap hop cac phan tu
- `.prop()` hoat dong tuong tu `.attr()` ben tren
- `.removeAttr(attributeName); .removeProp(attributeName)` xoa 1 thuoc tinh; trong do `.removeProp()` se chuyen gia tri attr ve thanh undifined ma khong xoa bo attributeName; khong thay doi duoc style cua item.
- `.val()`
