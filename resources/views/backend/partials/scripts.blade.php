<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
 toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script>

<script src="{{ asset('public/admins/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/admins/js/main.js') }}"></script>
{{-- <script src="{{ asset('public/admins/js/plugins/pace.min.js') }}"></script> --}}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{ asset('public/js/app.js') }}"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script charset="utf-8" type="text/javascript" src="http://torifat.github.io/jsAvroPhonetic/libs/avro-keyboard/dist/avro-v1.1.4.min.js"></script>
<script src="{{ asset('public/admins/js/plugins/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('public/admins/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('public/admins/js/custom.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

{{-- SimpleBar Script --}}
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>

<script>
	$(document).ready(function() {

   var table = $('#datatable').DataTable({
          // "scrollY": "350px",
          "paging": true,
          "pageLength": 50,
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });

   $('a.toggle-vis').on( 'click', function (e) {
     e.preventDefault();

        // Get the column API object
        var column = table.column( $(this).attr('data-column') );

        // Toggle the visibility
        column.visible( ! column.visible() );
      });
 });
</script>
<script type="text/javascript">
  $(document).ready(function() {

    {{-- ToolTip --}}
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });

    {{-- SideBar Scroll Heplper --}}
    $(".simplebar-content").click(function(){
      if ($(".simplebar-offset").css('bottom') == '-17px') {
        document.getElementById('app-sidebar__toggle').click();
      }
    });
    $(".simplebar-content").hover(function(){
      if ($(".simplebar-offset").css('bottom') == '-17px') {
        document.getElementById('app-sidebar__toggle').click();
      }
    });

  });
  
  /*javascript pluralize a string*/
  String.prototype.plural = function(revert){

    var plural = {
      '(quiz)$'               : "$1zes",
      '^(ox)$'                : "$1en",
      '([m|l])ouse$'          : "$1ice",
      '(matr|vert|ind)ix|ex$' : "$1ices",
      '(x|ch|ss|sh)$'         : "$1es",
      '([^aeiouy]|qu)y$'      : "$1ies",
      '(hive)$'               : "$1s",
      '(?:([^f])fe|([lr])f)$' : "$1$2ves",
      '(shea|lea|loa|thie)f$' : "$1ves",
      'sis$'                  : "ses",
      '([ti])um$'             : "$1a",
      '(tomat|potat|ech|her|vet)o$': "$1oes",
      '(bu)s$'                : "$1ses",
      '(alias)$'              : "$1es",
      '(octop)us$'            : "$1i",
      '(ax|test)is$'          : "$1es",
      '(us)$'                 : "$1es",
      '([^s]+)$'              : "$1s"
    };

    var singular = {
      '(quiz)zes$'             : "$1",
      '(matr)ices$'            : "$1ix",
      '(vert|ind)ices$'        : "$1ex",
      '^(ox)en$'               : "$1",
      '(alias)es$'             : "$1",
      '(octop|vir)i$'          : "$1us",
      '(cris|ax|test)es$'      : "$1is",
      '(shoe)s$'               : "$1",
      '(o)es$'                 : "$1",
      '(bus)es$'               : "$1",
      '([m|l])ice$'            : "$1ouse",
      '(x|ch|ss|sh)es$'        : "$1",
      '(m)ovies$'              : "$1ovie",
      '(s)eries$'              : "$1eries",
      '([^aeiouy]|qu)ies$'     : "$1y",
      '([lr])ves$'             : "$1f",
      '(tive)s$'               : "$1",
      '(hive)s$'               : "$1",
      '(li|wi|kni)ves$'        : "$1fe",
      '(shea|loa|lea|thie)ves$': "$1f",
      '(^analy)ses$'           : "$1sis",
      '((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$': "$1$2sis",        
      '([ti])a$'               : "$1um",
      '(n)ews$'                : "$1ews",
      '(h|bl)ouses$'           : "$1ouse",
      '(corpse)s$'             : "$1",
      '(us)es$'                : "$1",
      's$'                     : ""
    };

    var irregular = {
      'move'   : 'moves',
      'foot'   : 'feet',
      'goose'  : 'geese',
      'sex'    : 'sexes',
      'child'  : 'children',
      'man'    : 'men',
      'tooth'  : 'teeth',
      'person' : 'people'
    };

    var uncountable = [
    'sheep', 
    'fish',
    'deer',
    'moose',
    'series',
    'species',
    'money',
    'rice',
    'information',
    'equipment'
    ];

    // save some time in the case that singular and plural are the same
    if(uncountable.indexOf(this.toLowerCase()) >= 0)
      return this;

    // check for irregular forms
    for(word in irregular){

      if(revert){
        var pattern = new RegExp(irregular[word]+'$', 'i');
        var replace = word;
      } else{ var pattern = new RegExp(word+'$', 'i');
      var replace = irregular[word];
    }
    if(pattern.test(this))
      return this.replace(pattern, replace);
  }

  if(revert) var array = singular;
  else  var array = plural;

    // check for matches using regular expressions
    for(reg in array){

      var pattern = new RegExp(reg, 'i');

      if(pattern.test(this))
        return this.replace(pattern, array[reg]);
    }

    return this;
  }
</script>