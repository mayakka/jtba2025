<?php
global $sect_title;
$sect_title = array (
  '定例行事の概要', // sect-1-title
  '講師のご紹介', // sect-2-title
  '各精舎の住所'  // sect-3-title
);
?>

<section id="sect-0" class="u-mb20">
  <h1 class="leadtext u-mb-2rem">近日中の行事予定</h1>
  <p class="u-mb-2rem">近日中の主な行事については、以下のGoogleカレンダーをご覧ください。各行事についてのお問い合わせは、それぞれの項目に記載されている「お問合せ先」まで直接ご連絡ください。</p>
  <?php get_template_part('partials/utility/google-calender'); ?>
</section>

<section>
  <h2 id="sect-1" class="headline-eventabout">定例行事の概要</h2>
  <div class="grid-x grid-margin-x medium-up-2 large-up-3 event-outline">
    <div class="cell">
      <h3 class="headline-eventname">法話と実践会</h3>
      <p>法話と実践会では、法話を織り交ぜ、ヴィパッサナー実践を行います。瞑想が初めての方にも、分かりやすく基本から指導します。以前から瞑想実践を続けてこられた経験者の方はご自身のペースで自由に長時間の瞑想ができます。瞑想や仏教について疑問のある方には、質疑応答も行います。</p>
    </div>
    <div class="cell">
      <h3 class="headline-eventname">宿泊ヴィパッサナー瞑想会</h3>
      <p>まとまった時間、じっくりと瞑想に取り組む合宿形式の瞑想会です。瞑想が初めての方にもていねいに指導されますので、ぜひご参加ください。毎日法話を織り交ぜ、個人のペースに合わせて指導を受けられます(全日程でなくても部分参加も可能です)。</p>
    </div>
    <div class="cell">
      <h3 class="headline-eventname">月例講演会</h3>
      <p>仏教では、現実にある個々の問題に対して、どう考え、どのようなことを薦め、どのように解いていき、何を目指しているのでしょうか。 この講演会では、身近な話題からテーマを採り上げ、いま現在社会で起きているさまざまな問題に関しても、仏教から何か解決法を見出せるかを探ります。</p>
    </div>
    <div class="cell">
      <h3 class="headline-eventname">初期仏教を学ぶ勉強会</h3>
      <p>パーリ経典解説・ダンマパダ解説など、パーリ聖典に遺されたお釈迦さまの根本の教えをひもとき、原典からわかりやすく解説します。翻訳では伝わりきらない、お釈迦さまの活きた教えを目の当たりに深く学べることでしょう。講師はスマナサーラ長老です。</p>
    </div>
    <div class="cell">
      <h3 class="headline-eventname">地域会員の自主活動</h3>
      <p>定例行事以外に、初期仏教を学ぶ会員の自主活動が日本全国のダンマサークルを通じて開かれています。連絡先は<a href="<?php echo esc_url( home_url( '/vihara/#dc' ) ); ?>">こちら</a>をご覧ください。協会におけるダンマサークル活動の位置づけについては<a href="https://j-theravada.net/wp/wp-content/uploads/2022/10/dhammaCircleGuideline.pdf" target="_blank">「ダンマサークル活動のガイドライン（概要版）」</a>をお読みください。</p>
    </div>
  </div>
</section>
<section id="sect-2">
  <h2 class="headline-eventabout">講師のご紹介</h2>
  <div class="grid-x grid-margin-x u-mb-20">
    <section class="cell medium-6 callout">
      <h3 class="headline-teacher">ウィセッタ長老<br>
        <span>Ven.Vicittasara sayadaw</span></h3>
      <p class="summary"> ミャンマー生まれ。16歳で出家、28歳でマハシ道場にてヴィパッサナー瞑想の修行に入られる。以来、今日まで26年間マハシに於いてヴィパッサナー瞑想の修行、近年はマハシ瞑想センターの指導主任として幾多の比丘、修行者を指導される。現在、日本において在日ミャンマー人の方々と共に、仏教活動を展開。日本テーラワーダ仏教協会でも定期的に瞑想会を開いている。</p>
    </section>
    <section class="cell medium-6 callout">
      <h3 class="headline-teacher">アルボムッレ・スマナサーラ長老<br>
        <span>Ven. Alubomulle Sumanasara</span></h3>
      <p class="summary"> スリランカ生まれ。13歳で出家、スリランカの国立大学で仏教哲学の教鞭をとった後、スリランカより日本に派遣され、その温厚な人柄と誠実な指導で多くの信奉者を生む。ＮＨＫテレビ「こころの時代」出演、テーラワーダ仏教協会、朝日カルチャーの講師などで活躍されている。</p>
    </section>
  </div>
</section>
<section>
  <h4 class="headline-eventcaution">行事に参加希望の方はお読みください</h4>
  <ol>
    <li>当協会の催しは会員に限らず誰でも自由に参加できます。宿泊瞑想会以外、予約は必要ありません。瞑想会に初めて参加される場合は、講師から瞑想指導がありますので、時間に遅れないようにお越しください。</li>
    <li>瞑想会では、坐禅を組みますので座りやすい服装でお越しください。座ることが困難な方には椅子の用意があります。当日受付にお申し出ください(坐禅に使う坐布は、会場にあります）。</li>
    <li>公共施設を使用した行事の際は、他団体の方々も使用されていますので、瞑想実践は決められた部屋でお願い致します。</li>
    <li>問い合わせ先の指定がない催し物に関するお問い合せは、事務局(tel:03-5738-5526　mail to: info@j-theravada.netまで。</li>
  </ol>
</section>
<section>
  <h4 class="headline-eventcaution">参加費（ご喜捨）について</h4>
  <p>日本テーラワーダ仏教協会の行事は、基本的に参加者のご喜捨（お気持ちで頂くお布施）で運営されています。
    <br> 初めて行事に参加される方は、「お布施と言われても実際にいくらぐらい払えばいいの？　その場の雰囲気でお金を取られてしまうんじゃないの？」と不安になるかもしれません。
    <br> お金を出したことで、あとから「見栄張って勿体なかった」「ケチりすぎた」といった後悔をすることなく、満足感と喜びを感じられるならば、それは「喜捨」になります。そのように、自分の「気持ち」を基準にすれば間違いないでしょう。お布施とは神秘的なものではなく、自分のこころによい結果をもたらす誰にでもできる「よいこと」です。
    <br> そんな感じで、気楽に考えてご参加ください。</p>
</section>

<section id="sect-3">
  <h2 class="headline-eventabout">各精舎の住所</h2>
  <div class="wrapper-viharalist">
    <section class="wrapper-viharaitem">
      <h3 class="headline-eventvihara">ゴータミー精舎</h3>
      <ul>
        <li>東京都渋谷区幡ヶ谷1-23-9</li>
        <li>電話：03-5738-5526</li>
        <li>京王新線幡ケ谷駅，笹塚駅，小田急線（営団千代田線）代々木上原駅下車</li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/vihara' ) ); ?>#sect-1" class="button-viharaitem">詳　細</a>
    </section>
    <section class="wrapper-viharaitem">
      <h3 class="headline-eventvihara">アラナ精舎</h3>
      <ul>
        <li>岸和田市流木町226</li>
        <li>電話：072-427-6614</li>
        <li>ＪＲ阪和線　東岸和田駅，南海本線　岸和田駅下車</li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/vihara' ) ); ?>#sect-2" class="button-viharaitem">詳　細</a>
    </section>
    <section class="wrapper-viharaitem">
      <h3 class="headline-eventvihara">マーヤデーヴィー精舎</h3>
      <ul>
        <li>兵庫県三田市対中町21-2</li>
        <li>079-506-0003</li>
        <li>JR福知山線　三田駅より徒歩約１５分，神戸電鉄　三田本町駅より徒歩約１０分</li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/vihara' ) ); ?>#sect-3" class="button-viharaitem">詳　細</a>
    </section>
  </div>
</section>

