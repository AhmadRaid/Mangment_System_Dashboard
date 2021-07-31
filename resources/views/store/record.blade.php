<h4>السجل</h4>
<!-- <div class="search-history">
    <input type="search" />
    <i class="fas fa-search"></i>
</div> -->
</div>
<hr/>
@foreach($audits as $a)
    <div class="history-content mt-4">
        <!-- start first event -->
        <div class="event">
            <h5>
                تم تغير حالة الطلب الى
                <span class="blue-span">تم شحن الطلب / حمزة نسور</span>
            </h5>
            <h6></h6>
            <h6>في :<span>{{$a -> created_at }}</span></h6>
            <h6>
                بواسطة <span>{{$a -> user -> email}}</span> البريد الالكتروني
                <span id="email-span">rawan@gmail.com</span>
            </h6>
        </div>
        <!-- end first event -->

        <!-- start second event -->
        <div class="event mt-4">
            <h5>
                تم تغير حالة الطلب الى
                <span class="blue-span">جاري التجهيز</span
                ><span class="green-span">تم تبليغ العميل</span>
            </h5>
            <h6>في :<span> 23:03:44 16-6-2021 </span></h6>
        </div>
        <!-- end second event -->

        <!-- start third event -->
        <div class="event mt-4">
            <h5 class="mb-3">
                <span class="green-span">تم انشاء الطلب</span>
            </h5>
            <h6>في :<span> 23:03:44 16-6-2021 </span></h6>
        </div>
        <!-- end third event -->
@endforeach
