<div class="user-profile">

    <!-- User profile image -->

    <!-- <div class="profile-img"> 

        <img src="{{ asset('/images/users/flag.png') }}" alt="user" />
        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>

    </div> -->


    <!-- User profile text-->

    <div class="profile-text">

        <h5>Welcome to {{ config('app.name', 'Laravel') }} !</h5>
        <h3>Log Out</h3>
        <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="" data-toggle="tooltip" title="Log out"><i class="mdi mdi-power"></i></a>

        <div class="dropdown-menu animated flipInY">

            <!-- text-->

            <a href="#" class="dropdown-item"><i class="ti-user"></i> </a>

            <!-- text-->

            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> </a>

            <div class="dropdown-divider"></div>

            <!-- text-->

            <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Log Out</a>

            <!-- text-->

        </div>

    </div>

</div>

<nav class="sidebar-nav">

    <ul id="sidebarnav">

        <li class="nav-devider"></li>
        
        <li class="nav-small-cap">{{ config('app.name', 'Laravel') }}</li>

        <li><a class="has-arrow waves-effect waves-dark" href="{!! url('dashboard') !!}" aria-expanded="false">

                <i class="mdi mdi-home"></i>

                <span class="hide-menu">Home</span>

            </a>

            <ul aria-expanded="false" class="collapse">
                <li><a href="{!! url('dashboard') !!}" >Dashboard</a></li>
            </ul>

        </li>       

        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">

                <i class="mdi mdi-food"></i>

                <span class="hide-menu">{{trans('lang.food_plural')}}</span>

            </a>

            <ul aria-expanded="false" class="collapse">

                <li><a href="{!! url('foods') !!}">{{trans('lang.food_plural')}}</a></li>

            </ul>

        </li>

        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">

                <i class="mdi mdi-reorder-horizontal"></i>

                <span class="hide-menu">{{trans('lang.order_plural')}}</span>

            </a>

            <ul aria-expanded="false" class="collapse">

                <li><a href="{!! url('orders') !!}">{{trans('lang.order_plural')}}</a></li>

                <li><a href="{!! url('placedOrders') !!}">{{trans('lang.placed_orders')}}</a></li>

                <li><a href="{!! url('acceptedOrders') !!}">{{trans('lang.accepted_orders')}}</a></li>
                
                <li><a href="{!! url('rejectedOrders') !!}">{{trans('lang.rejected_orders')}}</a></li>

                <li><a href="{!! url('orderReview') !!}">{{trans('lang.order_review')}}</a></li>

            </ul>

        </li>
            <li><a class="has-arrow waves-effect waves-dark" href="{!! url('coupons') !!}" aria-expanded="false">

                <i class="mdi mdi-sale"></i>

                <span class="hide-menu">{{trans('lang.coupon_plural')}}</span>

            </a>           
        </li>

        <li class="dineInHistory hide"><a class="has-arrow waves-effect waves-dark" href="{!! url('booktable') !!}" aria-expanded="false">

                <i class="fa fa-table "></i>

                <span class="hide-menu">{{trans('lang.book_table')}} / DINE IN History</span>

            </a>           
        </li>        

        <li class="specialOfferDiv hide"><a class="has-arrow waves-effect waves-dark" href="{!! url('special-offer') !!}" aria-expanded="false">

        <i class="fa fa-table "></i>

        <span class="hide-menu">{{trans('lang.special_offer')}}</span>

        </a>           
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">

                <i class="mdi mdi-wallet"></i>

                <span class="hide-menu">{{trans('lang.payment_plural')}}</span>

            </a>

            <ul aria-expanded="false" class="collapse">

                <li><a href="{!! url('payments') !!}">{{trans('lang.payment_plural')}}</a></li>

                <!-- <li><a href="{!! url('earnings') !!}">{{trans('lang.earning_plural')}}</a></li> -->               

            </ul>

        </li>  
    </ul>
</nav>    
<?php /*
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sidebar-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto" id="sidebarnav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                   <?php /* @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif *//* ?>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
*/?>

<script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-storage.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-database.js"></script>
    <script src="https://unpkg.com/geofirestore/dist/geofirestore.js"></script>
    <script src="https://cdn.firebase.com/libs/geofire/5.0.1/geofire.min.js"></script>
    <script type="text/javascript">@include('vendor.notifications.init_firebase')</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
   
     var database = firebase.firestore();
     var vendorUserId = "<?php echo $id; ?>";




     $(document).ready(function(){
         database.collection('vendors').where('author',"==",vendorUserId).get().then(async function(vendorSnapshots){
        var vendorData = vendorSnapshots.docs[0].data();    
        var enabledDiveInFuture = vendorData.enabledDiveInFuture;
            console.log("enabledDiveInFuture = " + enabledDiveInFuture);
        if(enabledDiveInFuture){
            $('.dineInHistory').show();
        }else{
            $('.dineInHistory').hide();
        }

    })

    var ref = database.collection('settings').doc("specialDiscountOffer");

    ref.get().then( async function(snapshots){
          var specialDiscountOffer = snapshots.data();

              if(specialDiscountOffer.isEnabled){
                  $('.specialOfferDiv').show();
                
              }else{
                $('.specialOfferDiv').hide();

              }
        
        })

     });
    

</script>
{{-- <ul class="navbar-nav">

   
    <li class="nav-item">
        <a class="nav-link" href="{!! url('dashboard') !!}">
            <p>{{trans('lang.dashboard')}}</p></a>
    </li>
   

    <li class="nav-header">{{trans('lang.app_management')}}</li>


    <li class="nav-item">
        <a class="nav-link" href="{!! route('users') !!}">
            <p>{{trans('lang.user_plural')}}</p></a>
    </li>
  


    <li class="nav-item has-treeview">
        <a href="#" class="nav-link ">
            <p>{{trans('lang.restaurant_plural')}} <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">                
            
            <li class="nav-item">
                <a class="nav-link" href="{!! route('restaurants.index') !!}">{{trans('lang.restaurant_plural')}}</p></a>
            </li>             
       
            <li class="nav-item">
                <a class="nav-link" href="{!! route('restaurantFilters.index') !!}"><p>{{trans('lang.restaurant_filter')}}</p></a>
            </li>
            
        </ul>
    </li>

 
    <li class="nav-item">
        <a class="nav-link" href="{!! route('categories.index') !!}">
            <p>{{trans('lang.category_plural')}}</p>
        </a>
    </li>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <p>{{trans('lang.food_plural')}}</p>
        </a>
        <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('foods.index') !!}">
                        <p>{{trans('lang.food_plural')}}</p></a>
                </li>
        </ul>
    </li>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <p>{{trans('lang.order_plural')}}</p>
        </a>
        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a class="nav-link" href="{!! route('orders.index') !!}">
                    <p>{{trans('lang.order_plural')}}</p>
                </a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="{!! route('orderReview.index') !!}">
                        <p>{{trans('lang.order_review')}}</p>
                    </a>
            </li>

        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! route('coupons.index') !!}">
            <p>{{trans('lang.coupon_plural')}}</p>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{!! route('drivers.index') !!}">
            <p>{{trans('lang.driver_plural')}} </p>
        </a>
    </li>

    <li class="nav-header">{{trans('lang.app_setting')}}</li>   

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <p>{{trans('lang.payment_plural')}}</p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a class="nav-link" href="{!! route('payments.index') !!}">
                    <p>{{trans('lang.restaurant_plural')}} {{trans('lang.payment_plural')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('restaurantsPayouts.index') !!}">
                    <p>{{trans('lang.restaurants_payout_plural')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('driver.driverpayments') !!}">
                    <p>{{trans('lang.driver_plural')}} {{trans('lang.payment_plural')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('driversPayouts.index') !!}">
                    <p>{{trans('lang.drivers_payout')}}</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">               
            <p>{{trans('lang.mobile_menu')}}</p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{!! url('settings/mobile/globals') !!}" class="nav-link">
                    <p>{{trans('lang.app_setting_globals')}}</p>
                </a>
            </li>              
        </ul>

    </li>
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <p>{{trans('lang.app_setting')}}</p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{!! url('settings/app/globals') !!}" class="nav-link">
                    <p>{{trans('lang.app_setting_globals')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('users.index') !!}">
                    <p>{{trans('lang.user_plural')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('currencies.index') !!}"><p>{{trans('lang.currency_plural')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('settings/payment/payment') !!}" class="nav-link">
                    <p>{{trans('lang.app_setting_payment')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('settings/app/social') !!}" class="nav-link">
                   <p>{{trans('lang.app_setting_social')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('settings/app/notifications') !!}" class="nav-link">
                   <p>{{trans('lang.app_setting_notifications')}}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{!! url('settings/promotion') !!}" class="nav-link">
                   <p>Promotion</p>
                </a>
            </li> 
            <li class="nav-item">
                <a href="{!! url('termsAndConditions') !!}" class="nav-link">
                    <p>Terms And Conditions</p>
                </a>
            </li>
        </ul>
    </li>
</ul>--}}
