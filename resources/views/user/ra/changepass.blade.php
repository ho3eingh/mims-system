@extends('user.ra.dashboard.layouts.master')
@section('content')

    <form action="/user/radiologist/editingprofile" method="post" enctype="multipart/form-data">
        <div class="Edit-Profile container">
            <div class="Edit-Profile-header">
                <svg style="margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1243 1236q-45-51-99-90t-116-67t-126-41t-134-14q-88 0-170 23t-153 64t-129 100t-100 130t-65 153t-23 170H0q0-120 35-231t101-205t156-167t204-115q-113-74-176-186t-64-248q0-106 40-199t109-163T568 40T768 0q106 0 199 40t163 109t110 163t40 200q0 66-16 129t-48 119t-75 103t-101 83q84 32 158 82t135 117l-90 91zM384 512q0 80 30 149t82 122t122 83t150 30q79 0 149-30t122-82t83-122t30-150q0-79-30-149t-82-122t-123-83t-149-30q-80 0-149 30t-122 82t-83 123t-30 149zm1464 384q42 0 78 15t64 41t42 63t16 79q0 39-15 76t-43 65l-717 717l-377 94l94-377l717-716q29-29 65-43t76-14zm51 249q21-21 21-51q0-31-20-50t-52-20q-14 0-27 4t-23 15l-692 692l-34 135l135-34l692-691z"/></svg>
                تغییر رمز عبور
            </div>
            <div class="Edit-Profile-main">
                <div class="Edit-Profile-input">
                    <div>
                        <label>رمز عبور جدید: </label>
                        <input type="text"   value="{{$user->firstname}}" name="firstname">
                    </div>
                    <div>
                        <label>تکرار رمز عبور جدید: </label>
                        <input type="text"   value="{{$user->lastname}}" name="lastname">
                    </div>
                    <div>

                    <div class="buttons">
                        <button style="margin-left: 10px;">ذخیره</button>
                        <a href='javascript:history.back()'>لغو</a>
                    </div>

                </div>


                <div class="show-errors">
                    @if ($errors->any())
                        <div class="alert alert-danger ">

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </form>

@stop
