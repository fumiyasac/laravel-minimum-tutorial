<?php
namespace App;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model implements StaplerableInterface {
  
  //Staplerの読み込み
  use EloquentTrait;
  
  protected $fillable = array('title', 'body', 'published', 'eyecatch');

  //コンストラクタ
  public function __construct(array $attributes = array()) {
    
    //画像の投稿設定
    $this->hasAttachedFile('eyecatch', [
      
      //画像の切り取るサイズのパターン
      'styles' => [
        'large' => '640x480#',
        'medium' => '300x200#',
        'thumb' => '100x75#'
      ],
      
      //格納ディレクトリ(public配下からのパス)
      'url' => '/uploads/topics/:id/:style/:filename'

      /* JFYI：S3を使用する際の設定のテンプレート的なもの
	      (注意事項)
	      [その1: configファイル] config/laravel-stapler/s3.phpにAWS S3の設定を記載 ※'storage' => 's3'を設定してあげる
	      [その2: s3内のパス設定] 'path' => '/uploads/topics/:id/:style/:filename'
	      
      's3_client_config' => [
        'key' => 'xxxx',
        'secret' => 'xxxx',
        'region' => 'xxxx'
      ],
      's3_object_config' => [
        'Bucket' => 'xxxx',
        'ACL' => 'xxxx'
      ],
      'storage' => 's3',
      */
    ]);
    parent::__construct($attributes);
  }

}
