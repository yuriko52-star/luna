@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" >
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
  </div>
  <form action="/contacts/confirm" class="form" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-item">
          <input type="text" name="name" placeholder="てすとアリス">
        </div>
        <div class="form__error">
          <!-- 後で -->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-item">
          <input type="text" name="email" placeholder="test@test.com">
        </div>
        <div class="form__error">
          <!-- 後で -->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-item">
          <input type="text" name="tel" placeholder="09012345678">
        </div>
        <div class="form__error">
          <!-- 後で -->
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-item">
          <textarea  name="content" placeholder="資料をいただきたいです"></textarea>
        </div>
       </div>
      </div>
    <div class="form__button">
      <button class="form__button-submit"tipe="submit">送信</button>
    </div>
</form>
</div>
  
  
@endsection