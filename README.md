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
<img width="3000" height="1762" alt="image" src="https://github.com/user-attachments/assets/b8afc8d9-aef2-4d7a-b908-b7dcafb13bc6" />
<img width="3000" height="1762" alt="image" src="https://github.com/user-attachments/assets/96e475e4-82ed-4a4e-b57f-ce2f857bb66b" />
<img width="1425" height="963" alt="image" src="https://github.com/user-attachments/assets/f4a4b473-a513-4061-9094-72786e08fb21" />
<img width="1447" height="833" alt="image" src="https://github.com/user-attachments/assets/c92fe94b-420b-4cc0-95ee-1e5cb2ddab19" />
