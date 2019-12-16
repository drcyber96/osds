@extends('layouts.app')

@section('content')



<style>
body {
  background-color: #333;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover

}


</style>

  <div class="container">

     <h3 class="text-white" align="center">{{__('lang.Search your Scammers Profile')}}</h3>


            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_platform" id="filter_platform" class="form-control" >
                            <option value="">{{__('lang.Select Platform')}}</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Mudah.my">Mudah.my</option>
                            <option value="Shopee">Shopee</option>
                            <option value="Lazada">Lazada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="filter_product" id="filter_product" class="form-control" >
                            <option value="">{{__('lang.Select Product')}}</option>
                            @foreach($product_name as $product)

                            <option value="{{ $product->product }}">{{ $product->product }}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">{{__('lang.Filter')}}</button>

                        <button type="button" name="reset" id="reset" class="btn btn-warning">{{__('lang.Reset')}}</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />

            <div class="table-responsive">
             <table id="scammers_data" class="table table-bordered table-striped">

                             <thead>
                                 <tr>
                                     <th>{{__('lang.Scammers Name')}}</th>
                                     <th>{{__('lang.Phone')}}</th>
                                     <th>{{__('lang.Email')}}</th>
                                     <th>{{__('lang.Bank Name')}}</th>
                                     <th>{{__('lang.Bank Account')}}</th>
                                     <th>{{__('lang.Platform Scam')}}</th>
                                     <th>{{__('lang.Product Scam')}}</th>
                                    <th>{{__('lang.Link')}}</th>



                                 </tr>
                             </thead>

                         </table>
            </div>

           </div>


<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_platform = '', filter_product = '')
    {
        var dataTable = $('#scammers_data').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            paging: true,



            ajax:{
                url: "{{ route('customsearch.index') }}",
                data:{filter_platform:filter_platform, filter_product:filter_product}
            },
            columns: [


                {
                    data:'name',
                    name:'name'
                },
                {
                    data:'phone',
                    name:'phone'
                },
                {
                    data:'email',
                    name:'email'
                },

                {
                    data:'bank_name',
                    name:'bank_name'
                },
                {
                    data:'bank_account',
                    name:'bank_account'
                },
                {
                    data:'platform',
                    name:'platform'
                },
                {
                    data:'product',
                    name:'product'
                },
                { "data": "link",
         "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
             $(nTd).html('<a target="_blank" href="'+oData.link+'"  class="btn btn-primary" >{{__('lang.Show')}}</a>');


         }
     }
            ]
        });
    }

    $('#filter').click(function(){
        var filter_platform = $('#filter_platform').val();
        var filter_product = $('#filter_product').val();

        if(filter_platform != '' &&  filter_platform != '')
        {
            $('#scammers_data').DataTable().destroy();
            fill_datatable(filter_platform, filter_product);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_platform').val('');
        $('#filter_product').val('');
        $('#scammers_data').DataTable().destroy();
        fill_datatable();
    });

});


</script>

</section>
@endsection
