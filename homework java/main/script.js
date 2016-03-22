function typeOf(variable) {
            var type = typeof variable;
            switch (true) {
                case String(variable) == 'null':
                    return 'null';
                case type == 'number' && isNaN(variable):
                    return 'NaN';
                case variable === window:
                    return 'window';
                case variable === document:
                    return 'document';
                case variable && !!variable.tagName:
                    return 'element';
                case variable && variable.nodeType == 3:
                    return 'textnode';
                case type == 'object':
                    switch (variable.constructor) {
                        case Array:
                            return 'array';
                        case String:
                            return 'string';
                        case Number:
                            return 'number';
                        case Boolean:
                            return 'boolean';
                    }
            }
            return type;
        }


var intNum = 15;
        var floatNum = 1.50;
        var bool = false;
        var string = "String literal";
        var object = {};
        var array = ["array"];
        var NaN = NaN;
        var nullLit = null;
        var undefinedLit;
        console.log(intNum + ", " + floatNum + ", " + bool + ", " + string + ", " + object + ", " + array + ", " + NaN + ", " + nullLit + ", " + undefinedLit);
console.log("typeof  intNum = " + typeof (intNum));
        console.log("typeof  floatNum = " + typeof (floatNum));
        console.log("typeof  bool = " + typeof (bool));
        console.log("typeof  string = " + typeof (string));
        console.log("typeof  object = " + typeof (object));
        console.log("typeof  array = " + typeof (array));
        console.log("typeof  NaN = " + typeof (NaN));
        console.log("typeof  nullLit = " + typeof (nullLit));
        console.log("typeof  undefinedLit = " + typeof (undefinedLit));
        console.log("----------");
        console.log("function typeOf intNum = " + typeOf(intNum));
        console.log("function typeOf floatNum = " + typeOf(floatNum));
        console.log("function typeOf bool = " + typeOf(bool));
        console.log("function typeOf string = " + typeOf(string));
        console.log("function typeOf object = " + typeOf(object));
        console.log("function typeOf array = " + typeOf(array));
        console.log("function typeOf NaN = " + typeOf(NaN));
        console.log("function typeOf nullLit = " + typeOf(nullLit));
        console.log("function typeOf undefinedLit = " + typeOf(undefinedLit));

var nullLit = null;
        var undefinedLit;
        console.log("typeof  nullLit = " + typeof (nullLit));
        console.log("typeof  undefinedLit = " + typeof (undefinedLit));

		


