@extends('layout')
@section('title', 'login')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error','اسم المستخدم أو كلمة المرور خطا ') }}</div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success','تم التسجيل') }}</div>
            @endif
        </div>
        <form action="{{ route('login.post') }}" method="POST" class="ms-auto me-auto "style="width: 500px; margin-top:100px;">
            @csrf
            <label class="form-label">اسم المستخدم</label>
            <input type="number" class="form-control" name="numberId">

            <div class="mb-3">
                <label class="form-label">كلمة السر</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
        </form>
    </div>





@endsection
