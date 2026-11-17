## 概要
COACHTECH 教材 Tutorial 10-6「Webセキュリティ ハンズオン」で作成した成果物です。

## 使用技術
- PHP 8.x
- Laravel 10.x
- CSRF 保護（`@csrf`）、XSS 対策（Blade の自動エスケープ）

## 学んだこと
- CSRF 攻撃の仕組みと @csrf ディレクティブ・CSRF トークンによる防御
- XSS 攻撃の仕組みと Blade の自動エスケープ（{{ }} と {!! !!} の違い）
- SQL Injection を防ぐ Eloquent / クエリビルダの仕組み

## 動作確認
- フォーム表示、送信、送信完了画面の表示を確認
- CSRFトークン削除時に `419 Page Expired` が表示されることを確認
- `<script>alert('XSS')</script>` が実行されず、エスケープされて表示されることを確認
