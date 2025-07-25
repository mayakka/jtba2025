<?php
/*
Template Name: kp
*/
?>

<?php get_header(); ?>
<?php get_template_part('header-subpage-kp'); ?>
<div id="body-container" data-sticky-container>
  <div id="body-grid">
    <main id="main-container">
      <div class="kp">

        <p class="kp-introduction">
          当協会では、2023年9月からオンライン会員登録制度を導入いたしました。これに伴い、従来の会員の皆様がスムーズにオンライン登録へ移行できるよう、特別な「移行優待コース」をご用意しました。ぜひご利用ください。
        </p>

        <div class="kp-box">
          <h2>移行優待コースの特典</h2>
          <p class="large-text">現会員の方がこのコースを使ってオンライン登録された場合
            <span class="line-break">初年度の年会費を<span class="red">4,000円</span><small>（通常5,000円）</small><span class="red">に割引き</span>します</span>
          </p>
          <ul>
            <li>２年目以降の継続年会費は5,000円で、指定口座からの自動引き落としとなります。</li>
            <li>毎年の更新手続きが不要になり、便利です。</li>
          </ul>
        </div>

        <div class="kp-description">
          <h2>ご利用にあたって</h2>
          <ul>
            <li>このコースは、<b>現会員の皆様がオンライン登録に移行される際に</b>ご利用いただけます。</li>
            <li>オンライン会員登録には、①<b>初年度年会費</b>の支払いと②<b>2年目以降の継続年会費</b>の登録が必要です。必ず両方の手続きを完了してください。</li>
            <li>オンライン登録に移行されると、<b>従来の会員期限は無効となり、新たな登録月を基準に翌年同月から毎年自動更新が行われます。</b></li>
            <li>ご利用いただけるクレジットカードは<b>VISA</b>または<b>MasterCard</b>のみです。継続課金の登録には、これらのクレジットカードか、<b>オンラインバンキングによる口座振替</b>のみがご利用いただけます。これらのオプションがご利用できない場合は、従来の郵便振込用紙による会員継続をご利用ください。</li>
          </ul>


        </div>
        <div class="kp-flow">
          <h2>移行優待コースのご利用方法</h2>

          <div class="kp-flowbox">
            <span class="num">1</span>
            <h3>専用フォームからの申請</h3>
            <p>下記ボタンから移行優待コース申請フォームにアクセスし、現在登録されている氏名と電話番号、オンライン登録に使用するメールアドレスを入力して送信してください。</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeLbaUCjhdj7cZ6543EFU_Y4sZjm1uGDB444LNyS264VkH0uA/viewform?usp=sf_link" target="_blank" class="kp-button">移行優待コース申請フォーム</a>
          </div>

          <div class="kp-downarrow"></div>

          <div class="kp-flowbox">
            <span class="num">2</span>
            <div class="_info">
              <h3>折り返しメールをお送りします</h3>
              <p>会員資格を確認後、移行優待コースに該当する方には、メールアドレス認証ページのURLが記載されたメールをお送りします。会員資格が確認できなかった方には、お問い合わせメールをお送りします。</p>
              <small><b>注意:</b>当協会はボランティアスタッフにより運営されています。返信まで時間がかかる場合がありますので、ご了承ください。</small>
            </div>
          </div>

          <div class="kp-downarrow"></div>

          <div class="kp-flowbox">
            <span class="num">3</span>
            <div class="_info">
              <h3>メールアドレスの認証</h3>
              <p>送信されたメールに記載のURLから、メールアドレス認証ページにアクセスしてください。メールアドレスを入力・送信後、会員登録用のURLが記載されたメールが送信されます。このURLから申込フォームにアクセスしてください。</p>
            </div>
          </div>

          <div class="kp-downarrow"></div>
          <div class="kp-flowbox _3rd">
            <span class="num">3</span>
            <div>
              <h3>申込フォームの入力と登録</h3>
              <p>申し込みフォームに氏名・電話番号・郵便番号・住所を入力し、決済方法をご登録ください。</p>

              <h4 class="kp-kessai">決済方法について</span></h4>
              <p>オンライン会員登録には、初年度年会費（初期費用）と２年目以降の継続年会費（継続課金）の２種類があります。必ずどちらもご登録いただくことがコースご利用の条件になります。</p>

              <h4 class="kp-kessai2">ステップ１：初期費用決済方法のご登録</h4>
              <ul>
                <li>
                  初期費用（初年度の年会費・4,000円）の決済には、<b>クレジットカード決済</b>か<b>コンビニ決済</b>がお選びいただけます。ご利用いただけるクレジットカードは、<b>VISA</b> か
                  <b>MasterCard</b>のみです。
                </li>
                <li>
                  クレジットカードをご登録の方で、同じカードを継続課金にもお使いになる方は「初期費用決済で利用したカードを継続課金方法としても登録する」のチェックボックスをチェックしたままにしておいてください（初期状態ではオンになっています）。この状態でご登録いただければ、ステップ２の継続課金方法のご登録は不要です。<br>
                  <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/kp/screen-checkbox.png')) ?>" alt="移行番号">
                </li>
                <li>ステップ１を完了しないと、次のステップ２には進めません。クレジットカードが使えない方は、ここではコンビニ決済を選択してください。</li>
              </ul>

              <h4 class="kp-kessai2">ステップ２：継続課金方法のご登録</h4>
              <ul>
                <li>初期費用決済で使用したクレジットカードとは異なる支払い方法をご希望の場合、「初期費用決済で利用したカードを継続課金方法としても登録する」のチェックを外して、次の画面で別の継続課金方法をご登録ください。</li>
                <li>継続課金方法の選択肢として、<b>クレジットカード決済</b>と<b>口座振替</b>の2つがあります。</li>
                <li><b>口座振替はオンラインバンキングのみ</b>ご利用いただけます。</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="kp-faq">
          <h2>よくあるご質問</h2>
          <div class="kp-faq-box">
            <span>Q</span>
            <h3>次年度の更新について教えてください</h3>
          </div>
          <p>
            次年度の更新は、オンライン登録会員に移行された月を基準に、毎年自動で行われます。継続年会費の決済日は、更新月の26日です。たとえば、2023年12月にオンライン登録会員に移行された場合、次年度以降は毎年12月26日に口座引き落としが行われます。<br>
            自動更新を希望されない場合は、更新月の前月末までに退会手続きを行ってください。手続きを行わない場合、更新月に自動更新され、26日に年会費が引き落とされます。
          </p>
          <div class="kp-faq-box">
            <span>Q</span>
            <h3>退会するにはどうしたらいいですか？</h3>
          </div>
          <p>
            退会はいつでも可能です。退会を希望される場合は、更新月の前月末までに<a href="https://docs.google.com/forms/d/e/1FAIpQLSeBN9XQ0FDuIvtzlJH7sgJuE3ZMoqTKV9Yyqsw0ZS3IlczEPQ/viewform?usp=sf_link" target="_blank">退会申請フォーム</a>からご連絡ください。前月末を過ぎてご連絡いただいた場合、更新月には自動更新されるため、ご注意ください（更新月が近づいた際には、更新のご案内メールをお送りいたします）。
          </p>
          <div class="kp-faq-box">
            <span>Q</span>
            <h3>住所やメールアドレスの変更をしたい場合はどうすればいいの？</h3>
          </div>
          <p>
            住所やメールアドレスを変更したい場合は、<a href="https://docs.google.com/forms/d/e/1FAIpQLSeyzT8QFAuHm_u5uBq1hyok8Kk_en_ml9kuA-L6WSjG6HMeJA/viewform?usp=sf_link" target="_blank">会員登録情報変更フォーム</a>からお手続きください。クレジットカードの変更を希望される場合は、同フォームの「クレジットカード情報の変更を希望する」項目にチェックを入れて送信してください。折り返し、新しい課金方法を設定するためのURLをお知らせいたします。
          </p>
          <div class="kp-faq-box">
            <span>Q</span>
            <h3>オンライン登録のメリットをあまり感じません</h3>
          </div>
          <p>
            オンライン登録の主なメリットとして、毎年の更新手続きが自動化され、振込用紙やインターネットバンキングでの手続きの手間が省ける点があります。自動引き落としに不安を感じる方もいらっしゃるかもしれませんが、更新月が近づくと「更新のご案内」メールをお送りしますので、安心してご利用いただけます。<br>
            また、これまでは協会からの連絡手段として『パティパダー』や協会ホームページのみでしたが、オンライン登録によりメールアドレスが整備され、重要なお知らせを確実にお届けできるようになります。<br>
            さらに、協会としても、郵便振込用紙の手作業入力が不要になるため、事務作業の効率が向上します。このように、会員の皆さまと協会双方にメリットのある制度ですので、多くの方にご協力いただければと思います。
          </p>
          <div class="kp-faq-box">
            <span>Q</span>
            <h3>会員情報をオンライン化してセキュリティ上の不安はないの？</h3>
          </div>
          <p>
            サービス運営会社のメタップスペイメントは、国際カードブランド5社が策定したカード情報保護の国際基準であるPCIDSS SAQ Type-Dに準拠しています。また、ISMS（情報セキュリティマネジメントシステム）の要求事項を定めた規格JIS Q 27001:2014にも準拠しており、セキュリティ対策は十分に施されています。
          </p>
        </div>

      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
