/*   All ajax form submit
 *   Date : November2, 2015
 *   Author : KJ
 *
 */

           /*-------------- form submit functions --------------*/
            
            $(function() {

            /*------------------ Register -------------------*/

            $('#testForm').submit(function () {
                var data = JSON.stringify($(this).serializeObject());
                console.log(data);
                $.ajax({
                    type: 'POST',
                    url: '/addartist2',
                    dataType: 'json',    //not req
                    data: data
                })
                .done(function (res) {
                    //alert('Success!! ' + res);
                    console.log(res);
                })
                return false;
            });

            /*----------------- / Register ------------------*/

            /*--------------- form data to JSON ---------------*/

             $.fn.serializeObject = function()
             {
                var o = {};
                var a = this.serializeArray();
                $.each(a, function() {
                    if (o[this.name] !== undefined) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
             };

            /*------------- / . form data to JSON ------------*/
            });

           /*------------------/ . ---------------------------*/