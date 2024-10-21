@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>お問い合わせ内容確認</h2>
  </div>
  <form action="" class="form">
  <div class="confirm-table">
    <table class="confirm-table__inner">
        <tr class="confirm-table__row">
            <th class="confirm-table__item">お名前</th>
            <td class="confirm-table__text">
                <input type="text" name="name" value="サンプルテキスト">
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__item">メールアドレス</th>
            <td class="confirm-table__text">
                <input type="text" name="email" value="サンプルテキスト">
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__item">電話番号</th>
            <td class="confirm-table__text">
                <input type="text" name="tel" value="サンプルテキスト">
            </td>
        </tr>
        <tr class="confirm-table__row">
            <th class="confirm-table__item">お問い合わせ内容</th>
            <td class="confirm-table__text">
                <input type="text" name="content" value="サンプルテキスト">
            </td>
        </tr>
    </table>
        <div class="form__button">
            <button class="form__button-submit"type="submit">送信</button>
        </div>
    </form>
  </div>
@endsection