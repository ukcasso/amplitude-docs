---
id: d98c5208-4487-4290-8151-ad1ffeda100e
blueprint: japanese_translation
title: 予測に基づくコホートをキャンペーンに活用
title_en: 'Leverage predictive cohorts for campaigns'
source: 'https://help.amplitude.com/hc/ja/articles/360049642891'
---
|  |
| --- |
| **この記事のテーマ：*** 選択したチャネルで予測派生のコホートをベースにキャンペーンを設定する
* キャンペーン結果を解釈し、それらの結果に沿って行動する
 |

予測に基づくコホートは、どのユーザーがコンバージョンする可能性が最も高いかを判断できますが、メールや広告キャンペーンでターゲットを絞り込まない場合、またはエクスペリエンスをパーソナライズしない場合は、メリットがありません。そのため、コホートを予測から保存したら、次のステップはターゲティングキャンペーンにつなげることです。

**注意：**予測に関する他の記事を必ずチェックしてください—[予測：AmplitudeのAIを使用してリフト値を最大化](https://help.amplitude.com/hc/en-us/articles/360049161832-Predictive-cohorts-use-Amplitude-s-AI-to-help-maximize-lift)して、[予測を構築する](https://help.amplitude.com/hc/en-us/articles/360049164712)。

予測に基づくコホートは、次の3つの一般的なキャンペーンタイプで最も役立ちます。

* **インクルージョン基準型**：これは予測コホートに最もシンプルなユースケースです：どの対象を絞り込むかを決定し、キャンペーンから誰を除外するかを決定します。
* **動的価格設定型**：これはより複雑ですが、非常に強力なユースケースです：ユーザーが高LTV（長期価値）ユーザーとなる可能性に応じて、価格または割引を調整します。
* **コンテンツパーソナライゼーション型**：これは最もインテンシブなユースケースですが、最も潜在性が高いペイオフがあります：適切なコンテンツを、適切なときに、適切なユーザーに表示します。

インクルージョン基準キャンペーンでは、コンバージョンする可能性が低いユーザーを除外します：これにより、メールキャンペーンと広告のCPAの購読解除率が低下します。次に、コンバージョンする可能性が最も高い、高可能性ユーザーを含めます。これにより、広告の効率とレートが最適化されます。最後に、インクリメンタルコンバージョンを最適化する方法として、決めかねている中間可能性ユーザーに焦点を当てることを考えます（ただし、これはより高度なユースケースです）。

動的な価格設定キャンペーンでは、**インバース価格**の原則に従うことを検討してください：より高い可能性のユーザーに低い割引率を適用するか、または高価格を適用します。一方、より低い可能性のユーザーには、高い割引率と低価格を適用するようにします。これは直感に反しているようですが、高可能性ユーザーは割引前でもコンバージョンする可能性が高いのです。ですから、そうしたユーザーには高い割引率や低価格を適用しないことが適切な対応です。

コンテンツパーソナライゼーションキャンペーンでは、予測コホートはどのユーザーがプロダクトカテゴリーに最も近いかを予測することができます。そのため、ユーザーがそのコンテンツタイプを見ていることを確認できます。これらのキャンペーンは非常に柔軟性があります：ユーザーのニーズとキャンペーンの目標に応じて、広告、メールまたはオンサイトでコンテンツをパーソナライズできるからです。

## キャンペーンを設定する

実行するキャンペーンの種類を決定し、プッシュするために使うチャネルを決定したら、**コホートを同期**します。コホートを同期し、キャンペーンを設定するには、以下のステップに従ってください。

1. コホートの詳細ページから、*[同期]*をクリックし、それからコホートの対象となるデスティネーションを選択します。そして、*[次へ]*をクリックします。
2. ワンタイム同期を選択するか、または繰り返し同期をスケジュールします。繰り返し同期の利点は、コホート内でユーザーの可能性が変更されたときは、それもデスティネーションに同期されることです。次に、*同期*をクリックします。
3. デスティネーションツールを開き、同期されたコホートを検索します。各プラットフォームでは、同期コホートを少し違った形で解釈および分類します。

* * * * * * Facebookでは、同期されたコホートはカスタムオーディエンスとして表示されます。
						* Googleでは、顧客リストとして表示されます。
						* Brazeでは、セグメント作成内でフィルター基準（「Amplitudeコホート」）として表示されます。
						* Iterableでは、ユーザーリストとして表示されます。

3. 次に、各ユーザーコホートにさまざまな同一のキャンペーンを設定します。この方法により、各コホートに対するキャンペーンの効果を個別に測定できます。例えば、2つの予測コホート（アップグレードする可能性が最も高い上位20%と下位80%）を有するアップグレードキャンペーンでは、コホートをBrazeに同期します。アップグレードキャンペーンに関連のあるメッセージングを有する、Brazeでの既存のメールキャンペーンを選択します。次に、キャンペーンを複製します：そのうちの1つは上位20%のコホートをターゲットし、残りはその他のすべての人をターゲットします。
4. 次に、コントロール（または**ホールアウト**）グループを作成します。これはキャンペーンに全く含まれていないユーザーグループです。コントロールグループを含むと、キャンペーンの全体的な効果を測定できます：例えば、メールキャンペーンで、キャンペーンを実行しなかった場合と実行した場合を比べて、購買数が増加したかどうかなどです。このコントロールを設定する場所はプラットフォームによって異なります。

* * * * * * Braze：[マルチ変量テスト](https://www.braze.com/docs/user_guide/engagement_tools/canvas/create_a_canvas/create_a_canvas/#step-4-use-multivariate-testing-using-canvas)
						* Iterable：[A/B実験](https://support.iterable.com/hc/en-us/articles/205480325-A-B-experiments-overview-)
						* Facebook広告：[ホールドアウトリフトテスト](https://www.facebook.com/business/help/719101111931761?id=2564729006895902)
						* Google広告：[広告実験](https://support.google.com/displayvideo/answer/9040669?hl=en)

これでキャンペーンが設定され、実行する準備ができました。サンプルサイズが小さな場合や低コンバージョンのイベントで動作する場合を除き、1週間または2週間実行してください：統計的有意に達する可能性を高めるには、さらに長期にわたって実行する必要があります。

## キャンペーンの結果を測定する

キャンペーンが完了したら、結果を分析します。開封率、クリック率、購読解約率、インプレッションといったトップレベル指標については、チャネル内で実行されます。チャネルは、キャンペーンの全体の期間にアグリゲートキャンペーンレベルでこれらの指標を報告し、コントロールグループに関連したリフトを伝えます。リフトがある場合は、キャンペーンが原因であるか、または他の外部性の結果であるかを評価します。

時間の経過に沿ってキャンペーンの結果を分析したい、または異なる帰属ウィンドウで異なるコンバージョンイベントを評価したい場合は、キャンペーンの指標をAmplitudeにインポートすることもできます。（チャネルがこの種の分析を提供する可能性は低いでしょう。）Amplitudeは、以下の方法でキャンペーンデータをインポートできます。

* Amplitude SDKによって自動的に収集されたUTMパラメータを監視する
* データをインポートするために、BrazeまたはIterableと双方向同期を設定する
* チャネルからコントロールとバリアントセグメントをダウンロードし、それらをアップロードします。CSVコホートをAmplitudeへ

キャンペーン指標がAmplitudeに表示されたら、予測コホートが異なる行動をしたかどうかを確認する必要があります。

これを行うには、キャンペーンに接した2つのセグメントをロードします：予測コホートA（上位20%）対予測コホートB（下位80%）。次に、コンバージョンイベントのイベントセグメンテーションとファネルチャートを比較します。それぞれのコホート間で行動違いが見られるはずです。

例えば、以下のスクリーンショットでは、エンゲージメント率とコンバージョン率が上位20%の予測コホートで高くなります：

![Event_Seg_clean.png](/docs/output/img/jp/event-seg-clean-png.png)

次に、異なるユーザーグループが異なる形でキャンペーンに反応したかを確認します。

今回は、次の4つのセグメントをロードします：予測コホートA（バリアント）対予測コホートA（コントロール）、予測コホートB（バリアント）対予測コホートB（コントロール）。ここで、各コホートのバリアントとコントロールのセグメント間のコンバージョン率の違いを比較します。

各セグメント間の違いは、メールキャンペーンを受け取るか、受け取らないかのリフトを表しています。違いの中の違いは**相対的なリフト**と同等です。相対的なリフトに違いがある場合、キャンペーンが異なる予測コホートに異なる影響を与えることを意味しています。

下のスクリーンショットでは、予測コホートAに+5%のリフトが確認できますが、予測コホートBには-25%のリフトです。これは、キャンペーンが上位20%にプラスの効果をもたらしている反面、下位80%にはマイナスの効果をもたらしていることを意味します。これらの結果から得られる教訓は何でしょうか？下位80%へのメールを停止することです！

## キャンペーン結果に基づく行動

両方のコホートが同様なオーガニックコンバージョン率を有する場合、基本的な予測モデル自体に欠陥があったことを意味します。これは通常、発生しません：ほとんどのAmplitude予測は統計的に正確で、一般的に上位20%コホートのコンバージョン率が高いことがわかるはずです。

両方のコホートがプラスのリフトを持っていた場合、キャンペーン介入は全体的にコンバージョンにプラスの影響を与えますが、1つのグループへの影響がより高くなります。このケースでは、広告キャンペーンを実行している場合、リフトが低いオーディエンスに対する広告努力を減らすか、または完全に広告を停止する必要があります。メールキャンペーンでは、より高いリフトを持つオーディエンスにメールの頻度を増やす必要があります。プロダクトベースのキャンペーンでは、リフトが低いオーディエンスには、割引率を低くします。

あるコホートにはプラスのリフトがあり、他のコホートにはマイナスのリフトがあった場合、次の動きは明白です：マイナスのリフトがあったオーディエンスへのメール、広告、割引提供、キャンペーン体験を直ちに停止することです。

両方のコホートがキャンペーンからまったくリフトを示さないか、またはマイナスのリフトを示している場合、そのキャンペーンは効果がないか、またはコンバージョンを積極的に減らしていることを意味します。直ちにキャンペーンを停止し、問題を特定する必要があります：それはチャネル、キャンペーンの内容、根本的なコホート定義、または3つのすべてがからんでいるかもしれません。

両方のコホートが類似したリフトを示している場合、オーガニックコンバージョン率に関係なく、キャンペーンがすべてのユーザーに等しい効果をもたらしていることを意味します。予測コホートは実際に、ここでは増分的な利益をもたらさないので、このチャネルでこのキャンペーンに予測された可能性によってセグメント化する利点はありません。

すべてのシナリオでは、どんな結果でもほとんど良い結果であると認識することが重要です。結果が予想または希望したものでない場合でも、すべてのキャンペーンは、学習体験になる可能性があります。
