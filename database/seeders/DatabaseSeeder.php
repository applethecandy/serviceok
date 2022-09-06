<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Work;
use \App\Models\Post;
use App\Models\Image;
use App\Models\Topic;
use \App\Models\Client;
use \App\Models\Master;
use \App\Models\Review;
use \App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Schlüsseldienst',      'Schädlingsbekämpfung',         'Elektriker Notdienst',
            'Sanitär Notdienst',    'Rohrreinigung',                'Möbeltischler',
            'Reinigungsdienste',    'Möbelaufbau und Reparatur',    'Transportdienst',
            'Umzugsservice',        'Kleinreparaturen',             'Gipserarbeiten',
            'Fliesenarbeiten',      'Maurerdienste',                'Malerarbeiten',
            'Wespenbekämpfung',     'Nagetierbekämpfung',           'Montage von Gipskartonplatten',
        ];

        foreach ($services as $service) {
            Service::create(['title' => $service]);
        }

        $reviews = [
            [
                'image' => 'plugs/review1.png',
                'author' => 'John Doe',
                'text' => 'Ich habe einen Umzugsservice für eine neue Wohnung bestellt. Großartig, ich empfehle es! Alles wurde sehr schnell abgewickelt.'
            ],
            [
                'image' => 'plugs/review2.png',
                'author' => 'John Doe',
                'text' => 'Kontaktiert, um den Heizkörper im Zimmer zu wechseln. Alles wie abgesprochen. Sehr qualifiziert. Er hat genau das getan, was nötig war, und meine Kosten minimiert.'
            ],
            [
                'image' => 'plugs/review3.png',
                'author' => 'John Doe',
                'text' => 'Die Waschmaschine musste repariert werden, manchmal machte sie ein lautes Geräusch, manchmal schaltete sie sich nicht ein. Die Arbeit wurde gut ausgeführt. Keine Beschwerden. Wir haben sogar einen Kalkentferner als Geschenk erhalten.'
            ],
            [
                'image' => 'plugs/review4.png',
                'author' => 'John Doe',
                'text' => 'Ich habe viele Dinge bei Service OK bestellt. Wände verdrahten, Türen einbauen und Eichenparkett restaurieren. Alles war großartig!'
            ],
            [
                'image' => 'plugs/review5.png',
                'author' => 'John Doe',
                'text' => 'Ich habe Service OK getestet, um jemanden mit geraden Händen anzurufen und den Wasserhahn im Bad zu reparieren. Das gefällt mir! Bequem!'
            ],
            [
                'image' => 'plugs/review6.png',
                'author' => 'John Doe',
                'text' => 'Ich hatte am Montagabend nach der Arbeit ein kleines Problem: Der Schlüssel brach im Türschloss ab. Die Versuche, das zerbrochene Teil zu entfernen, waren erfolglos, deshalb rief ich den Service OK an. Nach etwa eineinhalb Stunden war der Techniker schon da. Er öffnete die Tür ohne Probleme. Es ist bequem, schnell und von hoher Qualität. Ich werde es wieder verwenden.'
            ],
            [
                'image' => 'plugs/review7.png',
                'author' => 'John Doe',
                'text' => 'Der Dienst funktioniert perfekt, und ich habe bei zwei Bestellungen keine Probleme gehabt. Der technische Support antwortet sofort. Ein guter Tag mit einem guten Service OK.'
            ],
        ];

        foreach ($reviews as $review) {
            Review::create([
                'image_id' => Image::create(['source' => $review['image']])->id,
                'author' => $review['author'],
                'text' => $review['text'],
            ]);
        }

        $topics = ['unknown', 'test'];
        $topics_created = [];

        foreach ($topics as $topic) {
            $topics_created[$topic] = Topic::create(['name' => $topic])->id;
        }

        $posts = [
            [
                'topic' => 'unknown',
                'image' => 'plugs/article1.jpg',
                'title' => 'Was macht Service OC einzigartig',
                'text' => '
                <p><b>Service OK</b> – ein Handwerkerdienst für alle Arten von Aufgaben im Haushalt. Wenn zum Beispiel Ihr Küchenwasserhahn kaputt ist, können wir schnell einen Handwerker finden, der ihn repariert.</p>
<h2>1000 Handwerker</h2>
<p>Wir haben über 1.000 Handwerker in unserer Datenbank, die bereit sind, jede Hausarbeit zu erledigen. Wir haben einen Schlosser, einen Elektriker, einen Möbelbauer, einen Maler und viele mehr, die Liste wird ständig erweitert. Egal, was kaputt ist, Service OK findet den richtigen Handwerker.</p>
<h2>So einfach ist das</h2>
<p>Unser Service ist einfach zu nutzen - Sie müssen weder einen langen Registrierungsprozess durchlaufen noch selbst nach dem richtigen Handwerker suchen. Sie brauchen nur das Formular auszufüllen: Beschreiben Sie Ihr Problem und geben Sie Ihre Adresse an, und wir werden den richtigen Handwerker kontaktieren und zu Ihnen schicken</p>
<h2>24/7-Unterstützung</h2>
<p>Die Servicespezialisten sind immer in Kontakt. Nach Erhalt Ihrer Anfrage wird Sie ein Manager zurückrufen, um alle Einzelheiten Ihrer Bestellung zu klären. Sie können auch selbst anrufen und eine Anfrage hinterlassen. Wir arbeiten 24/7, auch an Feiertagen und Wochenenden. Wenn also etwas kaputt ist oder dringend vor dem Urlaub gereinigt werden muss, kontaktieren Sie uns bitte, wir werden Ihnen helfen.</p>
<p><b>Service OK für Handwerker</b> – ein Dienst, der Ihnen hilft, zusätzliche Arbeit zu finden. Wenn Sie wissen, wie man repariert, Möbel zusammenbaut, verputzt oder professionell reinigt, finden wir Arbeit für Sie.</p>
<h2>Jede Arbeit</h2>
<p>Wir haben keine besonderen Anforderungen an Handwerker. Auch wenn Sie keine spezielle Ausbildung haben, finden wir Arbeit für Sie. Die Hauptsache ist, dass Sie Ihr Fachwissen haben. Sehen Sie sich die Liste der Handwerker an, die sich bereits registriert haben und Aufträge erhalten - Elektriker, Stuckateure, Möbelbauer und andere. Sie werden sicher Arbeit für Sie finden.</p>
<h2>Es gibt viel zu tun</h2>
<p>Es gibt immer etwas zu tun! Unser Kundenstamm wächst ständig, so dass Sie nicht untätig sein werden, denn die Aufträge gehen täglich ein, auch an Wochenenden und Feiertagen. Sobald Sie sich registriert haben, werden Sie nicht vergessen, ein Manager wird Sie zurückrufen und Ihnen alle Einzelheiten mitteilen, und Sie werden Ihre ersten Aufträge erhalten.</p>
<h2>So einfach ist das</h2>
<p>Es ist sehr einfach, Mitarbeiter des Service OC zu werden. Sie müssen lediglich ein Formular mit Ihren Daten und Ihrem Beruf ausfüllen. Sie erhalten Aufträge für den von Ihnen gewählten Beruf. Wenn Sie Ihren Beruf nicht auf der Liste finden, erklären Sie dem Manager einfach, was Sie gut können, damit Sie nur Aufträge erhalten, die Sie erfüllen können.</p>
<h2>24/7 Unterstützung</h2>
<p>Die Service-OK-Manager arbeiten rund um die Uhr, so dass alle Fragen und Probleme schnell gelöst werden können. Mit uns werden Sie mit Kundeneinwänden nicht allein gelassen, wir können Ihnen helfen, jede Konfliktsituation zu lösen.</p>
<p><b>Service ОК</b> – ist ein einzigartiger Dienst, der Menschen, die einen Arbeiter brauchen, und Handwerker, die Arbeit suchen, zusammenbringt.</p>
                ',
            ],
            [
                'topic' => 'unknown',
                'image' => 'plugs/article2.jpg',
                'title' => 'Warten Sie nicht, bis es kaputt geht',
                'text' => '
                <p>Eine Zerstörung ist immer ein unangenehmes Ereignis, das viele Unannehmlichkeiten verursacht und Sie zwingt, Geld für Reparaturen oder Ersatz auszugeben. Um Zeit und Geld zu sparen, ist eine rechtzeitige vorbeugende Wartung unerlässlich.</p>
<p>Prävention ist eine Reihe von Maßnahmen, um ein Objekt in einem funktionsfähigen Zustand zu halten, was zu einer langen Lebensdauer führt.</p>
<h2>Vorbeugende Wartung von Elektrogeräten:</h2>
<ul>
<li>1) <u>Allgemeine Regel für alle Elektrogeräte</u> – wenn Sie das Gerät nicht benutzen, ziehen Sie den Netzstecker. Dadurch werden Überspannungen vermieden, die Schäden oder sogar Brände verursachen können.<br>
Wenn Sie Ihr Telefon aufgeladen haben, ziehen Sie den Stecker des Ladegeräts aus der Steckdose; wenn die Spannung plötzlich ansteigt, wird nicht nur das Ladegerät, sondern auch die Steckdose beschädigt.<br>
Wenn ein paar Tage lang niemand zu Hause ist, schalten Sie die gesamte Wohnung stromlos. Sie können dies tun, indem Sie die Leistungsschalter in den Schalttafeln ausschalten. Dies schützt Ihr Haus vor Überspannungen und Kurzschlüssen.</li>
<li>2) <u>Elektrokochfeld</u> – Verwenden Sie alle 4 Kochzonen. Wenn nur die 2 nächstgelegenen verwendet werden, wird die Last nicht gleichmäßig verteilt, was zu einer Überhitzung des Steuergeräts führt.</li>
<li>3) <u>Kühlschrank</u> – einmal im Jahr abtauen. Auch die modernsten Kühlschränke müssen gewartet und gereinigt werden. Auf diese Weise verlängert sich die Lebensdauer Ihres Kühlschranks, und bei der Wartung können Sie Fehler entdecken, die bei der Benutzung Ihres Kühlschranks nicht aufgefallen sind. Rufen Sie einen Handwerker, damit alles repariert wird, bevor etwas Ernstes kaputt geht.</li>
<li>4) <u>Geschirrspüler</u> — einmal im Jahr reinigen. Die Häufigkeit der Kalkreinigung hängt von der Härte des Wassers ab. Aber mindestens einmal im Jahr. Verwenden Sie Wasserenthärter, wenn das Wasser in Ihrer Gegend sehr hart ist. Denken Sie auch daran, Fettentferner zu verwenden, um das Fett zu beseitigen: Ohne sie wird der Geschirrspüler innerhalb von 2-3 Jahren fettig.</li>
<li>5) <u>Waschmaschine</u> – entkalken Sie das Gerät einmal alle sechs Monate. Lassen Sie dazu die Wäsche bei 90 Grad Celsius ohne Wäsche laufen. Um die Wirkung zu verstärken, verwenden Sie Zitronensäure oder einen speziellen Entkalker. Dadurch wird die Lebensdauer des Heizelements verlängert.</li>
<li>6) <u>Waschmaschine</u> – reinigen Sie den Staub einmal im Jahr. In einer Klimaanlage sammelt sich viel Staub und sie muss immer gereinigt werden, sonst geht sie kaputt. Am besten ist es, einen Techniker mit der Reinigung zu beauftragen, aber Sie können auch versuchen, es selbst zu tun:
<ul>
<li>a) Entfernen Sie die Abdeckung</li>
<li>b) Entfernen Sie den Filter und spülen Sie ihn mit Wasser ab.</li>
<li>c) Trocknen Sie es aus.</li>
<li>d) Sie wieder einbauen</li>
</ul>
</li>
</ul>
<p><b>Vorbeugende Wartung von Sanitäranlagen </b> — reinigen Sie die Rohre alle 2 Wochen. Verwenden Sie unterschiedliche Produkte für Kunststoff- und Metallrohre. Natronlauge für Metall und eine heiße Waschmittellösung für Kunststoff.</p>
<p>Installieren Sie einen Wasserfilter, um sicherzustellen, dass Ihre Rohre und Wasserhähne länger halten, weil weniger Kalk im Wasser ist.</p>
<p><b>Vorbeugende Wartung von Gasanlagen</b> – einmal im Jahr überprüfen. Lassen Sie dies von einem zugelassenen Gasinstallateur durchführen. Nur ein zugelassener Gasinstallateur ist in der Lage, eine ordnungsgemäße Prüfung durchzuführen.</p>
<p>Achten Sie auf die Lebensdauer Ihres Gaskessels - der Betrieb eines abgelaufenen Geräts ist lebensgefährlich. Achten Sie auf die Art und Weise, wie das Feuer brennt. Wenn sich die Farbe oder die Intensität des Feuers verändert hat, liegt ein Problem vor, rufen Sie sofort einen Techniker.</p>
<p>Achten Sie bei der Reinigung Ihres Gaskochfeldes darauf, dass kein Wasser in die Gasaustrittsöffnungen eindringt. Gehen Sie vorsichtig mit dem Gasgerät um und beachten Sie die Sicherheitsvorschriften.</p>
<p><b>Möbel</b> – kontrollieren Sie die Möbel einmal im Jahr. Achten Sie auf den Zustand und ziehen Sie die Schrauben nach Bedarf nach.</p>
<p>Behandeln Sie Holzmöbel alle sechs Monate mit Produkten auf Bienenwachsbasis, saugen Sie Möbel mit Stoffbezügen jede Woche ab und imprägnieren Sie Ledermöbel mit einer speziellen Antifouling-Lösung.</p>
<p><b>Fenster und Türen</b> — waschen und fetten Sie die Scharniere alle sechs Monate. Verwenden Sie dazu ein spezielles Fett oder einfaches Maschinenöl. Denken Sie auch daran, die Tür- und Fensterbeschläge zu reinigen.</p>
<p>warten Sie nicht, bis etwas kaputt geht - wenn Sie sich um Ihre Sachen kümmern und eine vorbeugende Wartung durchführen, sparen Sie Mühe, Geld und Zeit, und die Dinge werden länger und besser funktionieren.</p>

                ',
            ],
            [
                'topic' => 'unknown',
                'image' => 'plugs/article3.jpg',
                'title' => 'Welche Handwerkerdienste sind auf der Website zu finden?',
                'text' => '
                <p>Service OK ist ein Service, der Ihnen bei allen Aufgaben im Haushalt hilft. Wenn Sie dringend umziehen müssen, können wir Umzugshelfer und ein Auto finden, wenn ein Rohr verstopft ist, können wir Ihnen helfen, einen Klempner zu finden. Mehr als 1000 Meister warten auf Ihre Aufträge.</p>
<p>Wenn Sie nicht genau wissen, welche Art von Handwerker Sie benötigen, sehen Sie sich unsere Liste der Dienstleistungen an. Hier haben wir detailliert aufgeführt, was jeder Handwerker tun kann und wann man ihn rufen sollte.</p>
<ul>
<li>1) <b>Schlosser</b> – ein Experte für alle Arten von Maschinen, für Metallarbeiten und für den Auf- und Abbau verschiedener Strukturen.<br />
Wenn Sie zum Beispiel einen Schlüssel im Schloss stecken haben, das Passwort für einen Tresor vergessen haben oder versehentlich Ihr Auto abschließen und die Schlüssel noch drin sind, rufen Sie einen Schlüsseldienst. Der Schlüsseldienst wird Ihnen helfen, die Tür zu öffnen, ohne sie zu beschädigen.</li>
<li>2) <b>Klempner</b> – ein Klempner, der Sanitär- und Abwassersysteme installiert und repariert. Ein Klempner arbeitet mit allem, was mit Rohren und Wasser zu tun hat.<br />
Wenn ein Rohr undicht ist, eine Toilettenschüssel verstopft ist oder ein Heizkörper nicht mehr funktioniert, rufen Sie einen Klempner. Der Fachmann kommt mit einer Reihe von Werkzeugen, um das Problem zu beheben: Rohre abdichten, die Toilettenschüssel reinigen, den Heizkörper wieder zum Laufen bringen.</li>
<li>Ein Klempner bietet auch einen <b>Rohrreinigungsservice</b> an. Wenn das Wasser in Ihrem Waschbecken, Ihrer Badewanne oder Dusche nicht mehr fließt, sollten Sie dringend einen Klempner rufen. Der Klempner untersucht den Arbeitsplatz, findet die Ursache der Verstopfung heraus und beseitigt sie.<br />
Zögern Sie nicht, einen Klempner zu rufen, wenn Sie feststellen, dass das Wasser langsamer als gewöhnlich abläuft. Wenn nicht schnell gehandelt wird, kann ein Rohrbruch Ihre Wohnung überfluten.</li>
<li>4) <b>Der Kammerjäger</b> — bekämpft Schädlinge und Wespen. Er beseitigt Kakerlaken, Fliegen, Milben, Bettwanzen, Wespen und andere Insektenschädlinge. Zu diesem Zweck verwendet er die wirksamsten und sichersten Desinfektionsmittel für Menschen.<br />
Und wenn Sie Mäuse oder Ratten haben, können Sie einen Entlausungsdienst beauftragen. Bei der Bekämpfung von Nagetieren kommen verschiedene Methoden zum Einsatz: Gifte, Fallen, Gas, elektronische Fallen und Klebefallen. Wenn eine Methode nicht funktioniert, wenden Sie eine andere an, bis es keine Schädlinge mehr gibt.</li>
<li>5) <b>Elektriker </b> – eine Person, die sich mit allem beschäftigt, was mit Elektrizität zu tun hat. Er oder sie kann Leitungen verlegen, Glühbirnen auswechseln, Steckdosen reparieren oder elektronische Geräte installieren.<br />
Wenn Sie eine durchgebrannte Glühbirne oder einen defekten Zähler haben, rufen Sie einen Elektriker. Der Elektriker findet die Ursache des Problems und behebt sie. Versuchen Sie nicht, stromführende Geräte selbst zu reparieren - das ist gefährlich für Ihr Leben. Überlassen Sie dies den Fachleuten.</li>
<li>6) <b>Möbelmontage und -reparatur </b> – unsere Handwerker können Ihnen bei der Montage oder Demontage jedes Möbelstücks helfen. Wenn Sie sich entschlossen haben, umzuziehen und Ihre Möbel mit in Ihre neue Wohnung zu nehmen, rufen Sie unsere Handwerker an. Die Möbelspediteure nehmen die Möbel in Ihrer alten Wohnung auseinander, bringen sie zu Ihrer neuen Wohnung und bauen sie dort wieder auf.<br />
Sie können auch Ihre Möbel reparieren. Ein kaputter Kleiderschrank, ein Bett, eine Schublade, ein Sofa - die Spezialisten werden mit jeder Art von Möbel fertig. Sie schrauben, kleben, stecken und machen Ihre Möbel wieder glücklich.</li>
<li>7) <b>Reinigungsdienste </b> – Reinigung von Büros, Wohnungen, Häusern und anderen Räumlichkeiten. Die Beschäftigten führen Nass- und Trockenreinigungen durch, waschen Fenster, Böden und Wände und beseitigen Bau- und Haushaltsabfälle.<br />
Wenn Sie kürzlich eine Reparatur hatten oder Ihr Haus vor den Ferien dringend reinigen müssen - rufen Sie die Reinigung an. Sie reinigen pünktlich und berücksichtigen alle Ihre Wünsche.</li>
<li>8) <b>Umzugsservice </b> – wir bieten eine Reihe von Umzugsdienstleistungen an: Wir planen den Umzug, finden einen Lkw und Umzugshelfer, die Ihr Hab und Gut verpacken, verladen und zu Ihrem neuen Zuhause oder Lager bringen. Wir können Ihnen beim Umzug in eine andere Region oder Stadt helfen.<br />
<b>Lieferung von Waren </b> – wir liefern sperrige Güter überall im Land. Lastkraftwagen mit unterschiedlichen Kapazitäten und Fassungsvermögen. Hinterlassen Sie eine Anfrage und geben Sie die Maße Ihrer Ladung an, und wir werden das richtige Auto und den richtigen Fahrer für Sie finden.
<li>9) <b>Reparaturen von Haushaltsgeräten </b> – Reparatur von Kühlschränken, Waschmaschinen, Geschirrspülern und anderen Haushaltsgeräten. Wenn Ihre Waschmaschine nicht mehr schleudert oder Ihr Gefrierschrank nicht mehr gefriert, rufen Sie einen Reparaturdienst. Sie können Ihre Geräte zu Hause reparieren oder, falls dies nicht möglich ist, selbst zum Servicecenter bringen.<br />
<li>10) <b>Maler- und Stuckateurarbeiten</b> – wir arbeiten in Wohnungen, Häusern und Industrieanlagen. Die Arbeiter bereiten den Raum für die Maler-, Tüncher- und Tapezierarbeiten vor. Die Arbeiter verwenden ausschließlich hochwertige Materialien, was die Haltbarkeit und Nachhaltigkeit der Beschichtung gewährleistet.<br />
Wenn Sie beschlossen haben, zu Hause die Tapeten zu wechseln oder die Wände in Ihrer Garage zu streichen, buchen Sie Stuckateure und Maler. Sie streichen die Wände und Decken in jeder beliebigen Farbe und kleben hochwertige Tapeten ohne Blasen, Risse oder Streifen.</li>
<li>11) <b>Fliesenlegerarbeiten</b> – Verlegung von Fliesen im Bad, in der Küche und auf dem Gehweg. Keramik, Feinsteinzeug, PVC, Marmor - wir können Fliesen nach Ihren Wünschen auswählen. Unsere Fachleute können das gesamte Material mitbringen und die Arbeiten selbst ausführen.<br />
<li>12) <b>Maurer</b> – Spezialist für den Bau und die Instandsetzung von Mauerwerken: Mauersteine, Betonsteine, Schlackensteine und andere Baumaterialien.<br />
Wenn Sie sich entschlossen haben, einen Steinzaun um Ihr Grundstück zu bauen oder eine zusätzliche Mauer in Ihrem Haus zu errichten, sollten Sie einen Steinmetz hinzuziehen. Der Fachmann berät Sie bei der Wahl des geeigneten Materials, berechnet Kosten und Zeitaufwand und führt die Arbeiten aus.</li>
<li>13) <b>Montage von Gipskartonplatten</b> – Der Bau von Trennwänden und Gipskartonverkleidungen im Innenbereich.  Gipskartonplatten werden für eine Vielzahl von Zwecken verwendet: Wandisolierung, Innentrennwände, abgehängte Decken, Öffnungen und Gewölbe.<br />
Unsere Handwerker können Ihnen helfen, eine Zwischendecke einzubauen oder die Wände mit Hilfe von Trockenbauwänden auszurichten. Sie kommen zu Ihnen nach Hause, bestimmen den Umfang der Arbeiten, wählen die erforderlichen Materialien aus und führen die Arbeiten aus.</li>
</ul>
<p>Dies ist eine unvollständige Liste der von uns angebotenen Dienstleistungen. Wir erweitern ständig unser Personal um Spezialisten und bauen unser Dienstleistungsangebot aus.</p>
<p>Sie können nicht finden, was Sie suchen? - Hinterlassen Sie eine Anfrage auf unserer Website und unsere Manager werden den richtigen Handwerker für Sie finden!</p>
                ',
            ],
            [
                'topic' => 'unknown',
                'image' => 'plugs/article4.jpg',
                'title' => 'Wie man an mehreren Projekten gleichzeitig arbeitet',
                'text' => '
                <p>Ein guter Handwerker hat immer viele Aufträge, aber nicht immer genug Zeit und Energie, um mehrere Projekte auf einmal zu erledigen. Wenn Sie befürchten, dass Sie ausbrennen, wenn Sie mehrere Projekte auf einmal übernehmen, lesen Sie unseren Artikel. Wir sagen Ihnen, wie Sie 3-4 oder sogar mehr Jobs kombinieren können.</p>
<p>1) <b>Liste der Aufgaben</b></p>
<p>Um ein Projekt oder eine Aufgabe nicht zu vergessen, legen Sie eine Tabelle an. Sie sollte Folgendes enthalten: den Namen des Projekts, die zu erledigenden Aufgaben und eine Frist - das ist das Mindeste.</p>
<p>Werkzeuge zur Führung einer Tabelle:</p>
<p>Papier ist eine Option für diejenigen, die keine Liste mit Aufgaben mit sich herumtragen müssen und die Informationen auf physischen Medien besser aufnehmen können. Wenn Sie z. B. von zu Hause aus arbeiten, sollten Sie Ihren Bildschirm mit Aufklebern versehen oder eine Aufgabentafel aufstellen.</p>
<p>Google Spreadsheets - für diejenigen, die den Bildschirm bevorzugen. In Google Docs können Sie Ihre eigene Tabelle erstellen oder eine Vorlage verwenden, Unteraufgaben erstellen, Notizen machen und vieles mehr. Eine solche Tabelle ist immer über das Internet zugänglich, was praktisch ist, wenn Sie viel unterwegs sind.</p>
<p>In Mobile - wenn alles immer griffbereit sein soll. Mobile Aufgabenplaner können Ihnen helfen, Listen, Checklisten und Tabellen zu erstellen, sich an Fristen zu erinnern, wichtige Notizen zu hinterlassen usw. Eine mobile App ist sinnvoll, wenn Sie beruflich viel unterwegs sind und Aufgaben schnell auftauchen und sich ändern - Sie müssen blitzschnell reagieren, damit Sie nicht vergessen, etwas Wichtiges in die Tabelle einzutragen.</p>
<p>2) <b>Prioritäten</b></p>
<p>Setzen Sie die Prioritäten je nach Ihrem Zustand. Wenn Sie sich stark und energiegeladen fühlen, nehmen Sie anspruchsvolle Projekte in Angriff; wenn das Gegenteil der Fall ist, machen Sie etwas Leichtes.</p>
<p>Das Wichtigste ist, die Fristen nicht zu vergessen: Filtern Sie die Aufgaben nach ihrer Dringlichkeit und beginnen Sie mit den schwierigsten. Es ist besser, mit dringenden und zeitaufwendigen Aufgaben zu beginnen.</p>
<p>3) <b>Zeit</b></p>
<p>Bei der Zeiteinteilung darf man nicht vergessen, dass ein Tag 24 Stunden hat und man sich ausruhen muss.</p>
<p>Wenn Sie früh aufstehen und Ihre Aktivität in der ersten Tageshälfte ihren Höhepunkt erreicht, ist es besser, kompliziertere Aufgaben zu diesem Zeitpunkt zu erledigen und die leichteren für den Abend aufzusparen. Umgekehrt, wenn Ihr Energieschub am Abend kommt.</p>
<p>Führen Sie Buch darüber, wie lange jede Aufgabe dauert - so können Sie Ihre Zeit optimal nutzen. Wenn Sie wissen, wie lange es dauert, eine Aufgabe zu erledigen, können Sie Ihre Arbeit auf die Minute genau planen. Starten Sie die Stoppuhr einfach jedes Mal, wenn Sie eine Aufgabe beginnen.</p>
<p>Unterteilen Sie Ihre Aufgabe in einzelne Schritte. Planen Sie jeden Schritt, damit Sie genau wissen, was zu tun ist. Wenn Sie beispielsweise zum Haus eines Kunden fahren müssen, sollten Sie die Fahrtzeit in einem separaten Schritt angeben. So können Sie Ihre Zeit viel besser planen.</p>
<p>4) <b>Delegieren Sie die Routine</b></p>
<p>Wenn es in Ihrem Arbeitsablauf Aufgaben gibt, die keine besonderen Fähigkeiten erfordern, aber zeitaufwändig sind, geben Sie diese Aufgaben ab. Nutzen Sie die freie Zeit, um sich auszuruhen oder grundlegende Aufgaben zu erledigen. Wenn Sie z. B. etwas kaufen müssen, bevor Sie Ihre Arbeit tun, machen Sie eine Lieferung. Das spart Zeit und Mühe.</p>
<p>5) <b>Berücksichtigen Sie höhere Gewalt</b></p>
<p>Berücksichtigen Sie bei der Planung eines Projekts nicht nur die Zeit, die es in Anspruch nehmen wird, sondern auch unvorhergesehene Umstände. Lassen Sie mindestens einen Tag, besser 2-3, in Reserve, damit Sie alles erledigen können. Zum Beispiel kann Ihr Auto oder Ihr Computer kaputt gehen, und Sie müssen mehrere Tage warten, bis er repariert ist.</p>
<p>Wenn Sie es aus irgendeinem Grund nicht rechtzeitig schaffen, warnen Sie den Kunden und machen Sie einen Preisnachlass, um den Kunden nicht zu verlieren.</p>
<p>6) <b>Entspannen Sie sich</b></p>
<p>Wenn Sie das Gefühl haben, dass Ihnen die Ressourcen ausgehen, nehmen Sie keine neuen Projekte in Angriff, beenden Sie alte und ruhen Sie sich aus. Qualitätsarbeit kann man nur leisten, wenn man wach ist. Wenn Sie die Arbeit schlecht machen, könnten Sie Kunden verlieren. Ruhe ist also genauso wichtig wie die Arbeit selbst.</p>
<p>Wir hoffen, dass unsere Ratschläge Ihnen helfen und dass Sie keine Schwierigkeiten haben werden, mehrere Projekte gleichzeitig zu verwalten.</p>
                ',
            ],
            [
                'topic' => 'unknown',
                'image' => 'plugs/article5.jpg',
                'title' => 'Wie man einmalige Kunden in Stammkunden verwandelt',
                'text' => '
                <p>Stammkunden sind diejenigen, die mehr als zweimal die Dienste desselben Handwerkers in Anspruch genommen oder etwas im selben Geschäft gekauft haben.</p>
<p>Stammkunden sind sehr gut fürs Geschäft: </p>
<p>Sie müssen nicht für sich werben – wissen über Sie und Ihre Arbeitsweise.</p>
<p>Kostenlose Werbung — ihren Freunden Orte oder Spezialisten zu empfehlen.</p>
<p>Problemlose Arbeit – Sie wissen bereits, was der Kunde will, und er weiß, wie Sie es schaffen werden.</p>
<p>Was braucht man, um jemanden dazu zu bringen, wiederzukommen und ein Stammkunde zu werden?</p>
<p>1. <b>Einen guten ersten Eindruck hinterlassen</b></p>
<p>Der erste Eindruck ist entscheidend dafür, ob ein Kunde Ihnen vertrauen kann. Dies hängt nicht nur davon ab, wie Sie sich verhalten und was Sie anhaben, sondern auch davon, wie gut Sie den ersten Auftrag ausführen. Selbst wenn eine Person auf den ersten Blick skeptisch ist, kann eine gut gemachte Arbeit Zweifel ausräumen.  </p>
<p>Es gibt viele Ratschläge, wie man einen Kunden dazu bringt, einen zu mögen: die richtige Körperhaltung, Mimik, Gestik, Kleidung, Stimme, NLP-Techniken und so weiter. Aber all das funktioniert nicht, wenn die Arbeit schlecht gemacht ist.</p>
<p>Es hilft auch nicht, gute Arbeit zu leisten, wenn man dem Kunden gegenüber unhöflich ist. Bleiben Sie bei der Kommunikation in einem respektvollen Ton, sprechen Sie nicht direkt mit "Du", zeigen Sie, dass der Kunde wichtig ist.</p>
<p>Machen Sie Ihre Arbeit gut und seien Sie höflich - so werden Sie einen positiven ersten Eindruck hinterlassen.</p>
<p>2. <b>An sich selbst erinnert zu werden</b></p>
<p>Nach der ersten Bestellung, auch wenn alles gut gelaufen ist, kann es sein, dass der Kunde Sie einfach vergisst. Um dies zu verhindern, sollten Sie sich daran erinnern.</p>
<p>Denken Sie an ein Treueprogramm, z. B. einen Rabatt auf die nächste Bestellung.</p>
<p>Laden Sie den Kunden ein, Sie in den Social Media zu abonnieren, wo Sie Ihre Arbeit zeigen. Wenn Sie noch keine haben, sollten Sie sie unbedingt haben.</p>
<p>Bitten Sie den Kunden, seine Kontaktdaten zu hinterlassen, um Sie über Rabatte und Sonderangebote zu informieren.</p>
<p>Wenn Sie wissen, dass ein Kunde nach einiger Zeit wieder eine ähnliche Dienstleistung benötigt, zögern Sie nicht, anzurufen oder zu schreiben und sich als Dienstleister anzubieten. Wenn Sie zum Beispiel einen Gasboiler installiert haben und dieser nach sechs Monaten überprüft werden muss, sollten Sie sich daran erinnern.</p>
<p>3. <b>Geschäftsbeziehungen pflegen</b></p>
<p>Wir haben bereits gesagt, dass Sie beim ersten Gespräch mit jemandem höflich sein sollten. Danach ist es besser, höflich zu sein und einen respektvollen Ton beizubehalten. Es gibt Ausnahmen, wenn sich eine freundschaftliche Beziehung zu einem Kunden entwickelt, man sich mit dem Vornamen anspricht und sich wohl fühlt.</p>
<p>Aber Vorsicht, diese Art von Beziehung führt oft dazu, dass der Kunde darum bittet, etwas "Freundliches" umsonst zu tun. Auch das Sprechen über persönliche Probleme kann den Kunden abschrecken.</p>
<p>Um dies zu vermeiden, sollten Sie selbst bei einer herzlichen Kommunikation mit einem Kunden auf Distanz gehen und auf der geschäftlichen Ebene bleiben. In der Kommunikation sollte es nur um die Arbeit gehen, die Sie für den Kunden zu leisten gedenken. Gehen Sie nicht auf sehr persönliche Themen ein.</p>
<p>4. <b>Ein bisschen mehr tun</b></p>
<p>Es ist immer schön, ein bisschen mehr zu bekommen, als man erwartet hat. Unerwartete, nette Kleinigkeiten, die Sie für einen Kunden tun, wecken positive Emotionen, die er in Zukunft mit Ihnen in Verbindung bringen wird. Dadurch wird die Kundenbindung erhöht und die Wahrscheinlichkeit, dass sie wiederkommen, gesteigert.</p>
<p>Wenn Sie z. B. die Installationsarbeiten durchführen, sollten Sie einen Foto- und Videobericht erstellen, auch wenn Sie dies nicht vereinbart haben. Dadurch wird der Kunde in die Arbeit einbezogen und das Vertrauen gestärkt.</p>
<p>Oder wenn Sie sich nur bereit erklärt haben, die Zimmer zu reinigen, räumen Sie auch den Flur auf, der Kunde wird es zu schätzen wissen.</p>
<p>Die Emotionen, die eine Person bei der Zusammenarbeit mit Ihnen empfindet, können ausschlaggebend dafür sein, ob sie sich erneut an Sie wendet.</p>
<p><b>Schlussfolgerung</b></p>
<p>Wenn Sie sich einen guten Kundenstamm aufgebaut haben, müssen Sie sich nicht mehr um Werbung und neue Aufträge kümmern. Sie werden von selbst kommen.</p>
<p>Unsere Empfehlungen sind nicht erschöpfend, es gibt viele Möglichkeiten, Kunden zu binden, aber das Wichtigste ist, ehrlich, offen und ansprechbar zu sein. Und machen Sie Ihre Arbeit gut, dann werden die Leute zu Ihnen zurückkommen und Sie Freunden empfehlen.</p>

                ',
            ],
            [
                'topic' => 'unknown',
                'image' => 'plugs/article6.jpg',
                'title' => 'Wie bestellt man eine Dienstleistung bei Service OK?',
                'text' => '
                <p><b>Service Ок</b> — ein Dienst zur Vermittlung von Handwerkern. Wenn Sie eine Haushaltshilfe brauchen, finden wir die richtige Person für Sie.</p>
<p>Wir haben über 1.000 Handwerker in unserer Datenbank. Sie können Rohre reparieren, aufräumen, Schlösser öffnen, Elektroarbeiten durchführen, Ungeziefer töten und vieles mehr. Wir erweitern ständig unsere Datenbank und die Liste unserer Dienstleistungen.</p>
<h2>Wie kann man eine Dienstleistung bestellen?</h2>
<h2>Verstehen, welche Art von Dienstleistung benötigt wird, dafür:</h2>
<ul>
<li>1) Prüfen Sie die Liste unserer Dienstleistungen und wählen Sie die richtige aus</li>
<li>2) Wenn Sie die gewünschte Dienstleistung nicht finden können, beschreiben Sie das Problem mit Ihren eigenen Worten</li>
<li>3) Rufen Sie uns an und teilen Sie uns mit, welchen Dienst Sie in Anspruch nehmen möchten. Sie können auch ein Bewerbungsformular auf der Website hinterlassen</li>
<li>4) Ein Manager hilft Ihnen bei der Auswahl der richtigen Option.</li>
</ul>
<h2>Entscheiden Sie sich für einen Handwerker.</h2>
<p>Wir kümmern uns um die Suche nach einem Handwerker, aber wenn Sie besondere Wünsche haben, werden wir diese berücksichtigen. Informieren Sie einfach unseren Manager.</p>
<p>Wir können Ihnen nicht versprechen, dass Sie den perfekten Handwerker für Ihre Bedürfnisse finden werden. Aber wenn Sie zum Beispiel einen weiblichen Meister statt eines männlichen Meisters bestellen möchten, werden wir unser Bestes tun, um Ihnen entgegenzukommen.</p>
<h2>Welche weiteren Informationen sind nötig?</h2>
<p>Um den Dienst zu bestellen, müssen Sie außerdem Ihren Namen, Ihre Adresse und Ihre Telefonnummer angeben.</p>
<p>Diese Informationen reichen aus, um den Auftrag zu erfüllen, aber je detaillierter das Problem ist, desto schneller können wir einen Techniker finden.</p>
<h2>Warten.</h2>
<p>Wenn alle Details geklärt sind, brauchen Sie nur noch zu warten. In dieser Zeit wird ein Manager einen Handwerker finden und ihn zu Ihnen schicken, um die Arbeit zu erledigen. Dies dauert in der Regel nicht lange, und Sie werden vor möglichen Verzögerungen gewarnt.</p>
<h2>Wenn etwas schief geht.</h2>
<p>Wir werden immer in Kontakt bleiben, wenn es einen Konflikt gibt oder Sie mit der Qualität der geleisteten Arbeit unzufrieden sind - rufen Sie uns an, wir werden jedes Problem lösen. Bitte teilen Sie uns mit, wenn ein Handwerker seine Arbeit nicht ordnungsgemäß erledigt hat, und wir werden Maßnahmen ergreifen.</p>
<h2>Um den Dienst zu bestellen, rufen Sie +7 (812) 603-94-02 an oder hinterlassen Sie eine Anfrage auf der Startseite unserer Website.</h2>
<h2>Wir hoffen, dass Service OK bei Ihren Problemen helfen wird.</h2>
                ',
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'topic_id' => $topics_created[$post['topic']],
                'image_id' => Image::create(['source' => $post['image']])->id,
                'title' => $post['title'],
                'text' => $post['text'],
            ]);
        }

        // foreach ($services as $service) {
        //     Client::factory()
        //         ->for(Work::factory()
        //             ->for(Service::create(['title' => $service]))
        //             ->create())
        //         ->create();
        // }

        // for ($i = 0; $i < 10; $i++) {
        //     Master::factory()->hasAttached(Service::all()->random(3))->create();
        // }

        // Post::factory(10)->create(['image_id' => Image::create(['source' => 'plugs/article1.jpg'])]);
        // Review::factory(10)->create(['image_id' => Image::create(['source' => 'plugs/review-avatar.jpg'])]);

        User::factory()->create();
    }
}