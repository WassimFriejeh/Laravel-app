@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
             <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEUAZAD///8AYQAAWwAAXgAAYAD7/vtChUKbvpsAWgAAZQAAaQAAZwD6/frB2MH3+/fZ6Nnl8OXy+PLV5dXr8+tOjk6TuZMachq607rK3sqxzrEAbQBblluty604gjjI3cgvfC8kdyRSkFJlnGWKtIo/hT94qXgPbw+gwaCAroBvoG90pnSOto6KrIqatZpxnnF93HwcAAAJ90lEQVR4nO2c2Xrqug6AiWMzliGEsVDG0tDh7P3+b7cbEslOCEU2Dhfn03+3ulo7imVNltNoMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzDMAzD/P8gZKjEE6YRT5ikCiVa//vn36T22VVy2glV9ywVhLtB8MtoXrOIch0FzcE0fPY6CvUZZMxkvRPthpdp3l6eu4yi8ZYLGLTrlVC283niXb0TFRFiAAI2T/W+2/AMM0Wb54koeluYNvgI7/3yY+ZWrXGq4elZIoourmBwvivgbpoIJd2l1OoSTJ4lYviKc77ee3KxD4Lx6O1733EVUiQTnC7aP8XcyB8t4H0NFJ+XBxzGH4mjwZcbQ8TeE5xGeMT5FpRgI9zHuY7NEjclk5sIpxw4jWA33WmoVZT0QlUvhn305baMcq9Xsd1xGcECY1cQVDRDJbgGg7nTMsq9XsXjPdv2INqybRvk9ZCHJm4kN3No7MVJvWFiCLFaMLLZ8yFGQMF46ibiqY96UKc9VbgJ7ey2SPD5gmHLScRQe/73GvVUgM1oWj6msYjBZO9mbt7xHW1qW8Vw5voa5ZeW0FXNFAYag7oWUZ3AYLzaKpqYTwwRP530VHTRoB5rit4U2NHI3pyJyJDQ0RyqKezmqJ7KgsS9vrZ/hSo2JAzabmqmd8msFj0Vo3z4hUNYUZRwvHJcAxhl7Gat/kZ+PjK6MrU0CL4cjc0JBribtdkjevCMTu6oNylIuHU0FR2wp0NXLbiN/IBd7pLAqFa/IKGjT/y1yWNYRP/mFHbhh8vQqOLA0dFpSzA23neihKwwcgtIBiUJXWuQ2rH6jt3kMh/YyVuLVbMkYZytobIeLYQKw+jF4UH+eMQdbCAnX6tjyqAwjvj6WFmqq5hD8H/wGp2ir3Xb4L2oLGFzmj6fWgSjqaV3xSD+1Wu2/5K72mbL5cWF32UBf7dR+qrUIdV7u4Iq+sSxz9ANR42dBu2NriXMXHaYWqCz5ekZmIQvjw4jhMODd5dBw7KrSFlelEFNL/pmVUtFz/PqcSO+wCK4OCGxGldIOMwf93I+sOhajCv2ua2Z+CueCiiSOCmpPFcIGASby1i5nyVVXgEFarr2tojo7s8uWUWr7AszsthI7LMFfrPw36im/iK3Dhhol5fWjSsFhDoBlIstdriAWoM/px/m27DvsA3Dn2oBMU/P47mmRVoNBQOX56keEAL62P6dqX2/WsDfmOQiEnham9II5lC+who8pHxz0PtlhWwZy9RHhFOttuRNjpmcr2KG/Dcf8Md6wEpXCMxEKA5GPDelroiC17LwJKGCoNQ6qQNLiTQL/463BSu0JA8LKZQvUyNytR9ubDd2WE4Lj6uvqyBcQ99WECZ7OqUBez+2HU8eyzJ8dmTyVv4hsqDu8w68Oet3Xg1UkSaWfyeS66TpWwpd9SxDVhKMk/0YU3QWI9slfL0WItWrTvv65xnUyoSEdOzDj4S7XMKlnYTqUBWu/Rp40b3lQmKiw7jklSltPxJucgkXdsPJynAtHURtqkNVclIrNjCal32oWnm28mYloaxI7FNFSA18p0J/LxADX7FrGqM9jDr0HSQU17WZC4NsyBsSEuNv9LPxykWiMmqdv7CzjYRXNeCcS5pUPE40IKbtYp6/vthLrcZtDW8sIcRFN1IqaooNfmjkJbtQU4d9eGMXgk8VN6zppEsbHmpbo50PCQVYGpvKj9xWi5Bn9texQAbVmELeHJ28SOjgLdKWxCryuExs8pe22BUXc0hcE5Sw5UVCB4+vqu3MNq+OYcYZq8aiICExbgMtjbwEpmiaLaK2q7OmbMWgaKh36U52TYXtE7UO96GfOsbKPvKuqnIHP1j4xSQ9+JRyagQ4fdqpAe7j2E/61M0fl549oWIbjI1Sk8K0aiAL6z2kraGuHHnx+FgOo2fAonVVf4pORt4Alygumm/0qlMtjYD6lp+oraGgaE0ul6ppUCIu9gdLsC+pcTVUmqgmGHlv/WTAeL5JrtqKcp17lBRfjthnUkWppZA66yd6fIxrrQLJ22DbHbmJRehW6WxpduUnEb3ZNh68XwTXu5IatXnOgLXODcj7cF+MrL+vX40IpQiztm88QievCV6kIRcg7zxvkluuSY/6J92Ct7izW8QcdZp46Ik1PC9h6S8deF6yMS2GpXfqRfgGgz7xieEowNtBN6bk5G6hQnZ4d+lXENaMaBvdtXJ0G32uTDY1G0PCey29ApveiM06+iDFVzsGGueI7GDNjXjvyEXM81+kdnJhxdVbr7BO58gb0Sz73jvfVS3iqwA6UNT319uGtuuH7PN32iPee3A46O8TL2vqErW/xi/MBeitCkagcq+nGO44UI/l8TjE5Tzz1jPs8kiX3hNlpBd32mXBboypzSMKglp/vRjGWTT9XrO+pjj5O8UB3/lNHBqVNCIHIATQcNCtqe58/zvygCsA5H4T3DJe24RFAoEVvZlMoZ7+5ebES2anly/kLQ7FK8/tl2BNY/qLk8fmffuUWyR6Jwb6loj8ICT0xSWL/kvoU/jDPnWyX5lcpVc3wRDS960SrNKTU6gGPn9ajakmzJZ5tCdrBlZi/beyY5Bio/7yI3MzNxqe5Pry38uEPiT6WZtOOBK6cWRpdQQ1HWcOo+qPwvUl8Dlb9F4qqJY3PTUpmI+Di1iRsd9GJhf/vO1di5hVLyZrmwvehRKWZ0SCN2StOleFOKbJ0fL6FnfqMIdvVre79f25Ou6RdrAT1vJynUxmvy9nclSlxVLHwflk9zEJBVGE912YYhzcHuxURISr2a8pjtol86ek5ccycKfUdGVdlyZGtjfHRJisF5NHv9aj8IjDqaOeAh722ZcPhArnh/lDswssjlt9DMAGow+GmgiYPPrBLt2j4qlMWjUHGhvH7wY8gj6Sq+ECKSBWmBFF8yd/Qk3iTe7adDRFbTBzr5hHhb64fnsSczFqOccR4+MIg1JGJ17Ws7Yf3g/lD6eoOR6G12ZHczq6wlT8Ao/a3+gCcmJQrNerFQ5e66dNUoRxQ6Rwl6fy6P4BEQtvL8FJa92E+Ww7fXK20NOpq47nBzFO9A0BLVJld6RxhK334s27Ma5oj6vmWm3cvt9ji/G1L53E3OpFdAbzP7XTHTcfdX8Hq0IasGy3rqi5gqeqQltR+qHC4yLqu9kY5avqa4aOYPFK9LSK1vwh0QIdLSJepFHv0bDph/EI95vUjf0/T1LRfOLvflnChuydWn7Y6M+x4gXdvtPnKh4RsZVtj5F5eCB8YQyZF2Ymz7GiJqr7E6VNujX7J9VK49Hhufd0ARtp/WU6tf3ogz1qf47b+wc+gPoIQj0jgxJh5+kfgmYYhmEYhmEYhmEYhmEYhmEYhmEYhmEYhmEYhmEYhmEYhmEYhmEYhqmT/wBMZoRTfLFddwAAAABJRU5ErkJggg=="
              class="rounded-circle w-100" >
            
        </div>
        <div class="col-9 pt-5 ps-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1> 
                
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Prorfile</a>

            <div class="d-flex">
                <div class="pe-4"><strong>{{ $user->Posts->count() }}</strong> posts </div>
                <div class="pe-4"><strong>23k</strong> followers</div>
                <div class="pe-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}
            </div>
            <div><a href="https://www.freecodecamp.org">{{ $user->profile->url }}</a></div>
        </div>

        <div class="row">
            @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}">
                </a>
            </div>
                
            @endforeach
        
        </div>
    </div>
</div>
@endsection
