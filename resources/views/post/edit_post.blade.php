<div class="row">
    <style>
          .table.table-sm td, .table.table-sm th {
              padding: 0.1rem .1rem;
              font-size: 12px;
              word-break: break-all;
                overflow-wrap: break-word;

          }
         table {
          max-width: 100%; 
        }
        table td {
          word-break: break-all;
        }
    </style>
    <div class="col-sm-12">
        
    </div>
</div>
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
