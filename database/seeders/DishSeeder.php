<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes=[   //APERTURA MEGA ARRAY
            

              "Italiano"=>  [   "primi"=>[
                                       [
                                         "nome"=> "Spaghetti alla Carbonara",
                                         "ingredienti"=> ["spaghetti", "uova", "guanciale", "pecorino romano", "pepe nero"],
                                         "descrizione"=> "Uno dei piatti più iconici della cucina romana, gli spaghetti alla carbonara sono una delizia cremosa preparata con uova, guanciale croccante e pecorino romano, conditi con pepe nero appena macinato."
                                       ],
                                       [
                                         "nome"=> "Linguine al Pesto Genovese",
                                         "ingredienti"=> ["linguine", "pesto genovese", "patate", "fagiolini", "pinoli"],
                                         "descrizione"=> "Un primo piatto tipico della Liguria, le linguine al pesto genovese sono arricchite con patate e fagiolini, e condite con il celebre pesto a base di basilico, pinoli, olio e formaggio."
                                       ],
                                       [
                                         "nome"=> "Risotto ai Funghi Porcini",
                                         "ingredienti"=> ["riso Arborio", "funghi porcini", "cipolla", "vino bianco", "brodo di carne"],
                                         "descrizione"=> "Un piatto di risotto irresistibile, il risotto ai funghi porcini è arricchito con i profumati funghi porcini, cipolla e vino bianco, cotto nel brodo di carne per una consistenza cremosa."
                                       ],
                                       [
                                         "nome"=> "Gnocchi alla Sorrentina",
                                         "ingredienti"=> ["gnocchi", "sugo di pomodoro", "mozzarella", "basilico", "parmigiano"],
                                         "descrizione"=> "Un piatto campano che unisce la delicatezza degli gnocchi con il sapore ricco del sugo di pomodoro, mozzarella fusa, basilico e parmigiano."
                                       ],
                                       [
                                         "nome"=> "Lasagne alla Bolognese",
                                         "ingredienti"=> ["lasagne", "ragù alla bolognese", "besciamella", "formaggio grattugiato", "burro"],
                                         "descrizione"=> "Un classico della cucina italiana, le lasagne alla bolognese sono strati di pasta fresca intercalati con un ricco ragù di carne, besciamella e formaggio, gratinati al forno."
                                       ],
                                       [
                                         "nome"=> "Pasta e Ceci",
                                         "ingredienti"=> ["pasta", "ceci", "aglio", "rosmarino", "peperoncino"],
                                         "descrizione"=> "Un piatto povero ma saporito, la pasta e ceci è una combinazione di pasta cotta nel brodo di ceci, arricchita con aglio, rosmarino e peperoncino."
                                       ],
                                       [
                                         "nome"=> "Ravioli al Burro e Salvia",
                                         "ingredienti"=> ["ravioli", "burro", "foglie di salvia", "parmigiano"],
                                         "descrizione"=> "Una delizia raffinata, i ravioli al burro e salvia sono ravioli ripieni di ricotta e spinaci, conditi con burro fuso e foglie di salvia croccanti."
                                       ],
                                       [
                                         "nome"=> "Pasta all'Amatriciana",
                                         "ingredienti"=> ["spaghetti", "guanciale", "pomodoro", "pecorino romano", "pepe nero"],
                                         "descrizione"=> "Un piatto romano classico, la pasta all'amatriciana è preparata con guanciale croccante, pomodoro, pecorino romano e una generosa spolverata di pepe nero."
                                       ],
                                       [
                                         "nome"=> "Minestrone",
                                         "ingredienti"=> ["verdure", "fagioli", "pasta", "brodo vegetale", "prezzemolo"],
                                         "descrizione"=> "Una zuppa italiana rustica e nutriente, il minestrone è ricco di verdure, fagioli, pasta e aromi, spesso servito con una spruzzata di prezzemolo fresco."
                                       ],
                                       [
                                        "nome"=> "Pasta alla Norma",
                                        "ingredienti"=> ["pasta", "melanzane", "sugo di pomodoro", "ricotta salata", "basilico"],
                                        "descrizione"=> "Un piatto tipico siciliano, la pasta alla Norma è un connubio di pasta, melanzane fritte, sugo di pomodoro, basilico fresco e ricotta salata."
                                      ]  ],
                                
                                "secondi"=>[
                                  
                                      [
                                        "nome"=> "Ossobuco alla Milanese",
                                        "ingredienti"=> ["ossobuco", "gremolada", "riso alla milanese"],
                                        "descrizione"=> "Un piatto milanese di carne, l'ossobuco è lentamente stufato con gremolada (limone, aglio e prezzemolo) e servito con riso alla milanese, un piatto ricco di zafferano."
                                      ],
                                      [
                                        "nome"=> "Cotoletta alla Milanese",
                                        "ingredienti"=> ["cotoletta di vitello", "uova", "pan grattugiato", "limone"],
                                        "descrizione"=> "Una cotoletta impanata e fritta, la cotoletta alla milanese è famosa per la sua croccantezza e il suo sapore delicato, servita con fette di limone."
                                      ],
                                      [
                                        "nome"=> "Brasato al Barolo",
                                        "ingredienti"=> ["carne di manzo", "vino Barolo", "cipolla", "carote", "sedano"],
                                        "descrizione"=> "Un piatto del nord Italia, il brasato al Barolo è una carne di manzo brasata lentamente nel celebre vino Barolo, con cipolla, carote e sedano."
                                      ],
                                      [
                                        "nome"=> "Baccalà alla Livornese",
                                        "ingredienti"=> ["baccalà", "pomodoro", "cipolla", "olive nere", "prezzemolo"],
                                        "descrizione"=> "Un piatto di pesce tipico della costa toscana, il baccalà alla Livornese è preparato con baccalà, pomodoro, cipolla, olive nere e prezzemolo."
                                      ],
                                      [
                                        "nome"=> "Polenta e Funghi",
                                        "ingredienti"=> ["polenta", "funghi", "burro", "parmigiano", "prezzemolo"],
                                        "descrizione"=> "Un piatto comfort del nord Italia, la polenta e funghi è una polenta cremosa servita con funghi trifolati, burro fuso, parmigiano e prezzemolo."
                                      ],
                                      [
                                        "nome"=> "Pesce Spada alla Siciliana",
                                        "ingredienti"=> ["pesce spada", "pomodoro", "capperi", "olive verdi", "aglio"],
                                        "descrizione"=> "Un piatto di pesce tipico della Sicilia, il pesce spada alla siciliana è preparato con pomodoro, capperi, olive verdi e aglio, creando un sapore audace e mediterraneo."
                                      ],
                                      [
                                        "nome"=> "Bistecca alla Fiorentina",
                                        "ingredienti"=> ["bistecca di manzo", "rosmarino", "olio d'oliva", "sale grosso"],
                                        "descrizione"=> "Una specialità toscana, la bistecca alla fiorentina è una succulenta bistecca di manzo cotta alla griglia, condita con rosmarino, olio d'oliva e sale grosso."
                                      ],
                                      [
                                        "nome"=> "Risotto ai Frutti di Mare",
                                        "ingredienti"=> ["riso Arborio", "frutti di mare misti", "vino bianco", "brodo di pesce", "prezzemolo"],
                                        "descrizione"=> "Un piatto di risotto profumato e saporito, il risotto ai frutti di mare è preparato con frutti di mare misti, vino bianco, brodo di pesce e prezzemolo fresco."
                                      ],
                                      [
                                        "nome"=> "Melanzane alla Parmigiana",
                                        "ingredienti"=> ["melanzane", "sugo di pomodoro", "mozzarella", "parmigiano", "basilico"],
                                        "descrizione"=> "Un piatto classico dell'Italia meridionale, le melanzane alla parmigiana sono strati di melanzane grigliate, salse con sugo di pomodoro, mozzarella, parmigiano e basilico fresco."
                                      ],
                                      [
                                        "nome"=> "Trippa alla Romana",
                                        "ingredienti"=> ["trippa", "sugo di pomodoro", "pecorino romano", "menta"],
                                        "descrizione"=> "Un piatto romano tradizionale, la trippa alla romana è cucinata lentamente con un ricco sugo di pomodoro, pecorino romano e un tocco di menta fresca."
                                      ]],
                           
                                "dolci"=> [
                                        [
                                          "nome"=> "Tiramisù",
                                          "ingredienti"=> ["mascarpone", "savoiardi", "caffè", "cacao in polvere"],
                                          "descrizione"=> "Il tiramisù è un dolce italiano amato in tutto il mondo. Questo dessert irresistibile si compone di strati di biscotti savoiardi inzuppati nel caffè, alternati con un cremoso mix di mascarpone, uova e zucchero, il tutto spolverato con cacao in polvere. Il suo equilibrio tra il dolce, l'amaro del caffè e la cremosità lo rende una delizia indulgente per il palato."
                                        ],
                                        [
                                          "nome"=> "Panna Cotta",
                                          "ingredienti"=> ["panna", "zucchero", "vaniglia", "frutti di bosco"],
                                          "descrizione"=> "La panna cotta è un dessert italiano delicato e vellutato. Preparata con panna fresca, zucchero e vaniglia, è servita con una gustosa salsa di frutti di bosco che ne esalta il sapore."
                                        ],
                                        [
                                          "nome"=> "Cannoli Siciliani",
                                          "ingredienti"=> ["cannoli", "ricotta", "zucchero a velo", "cioccolato", "canditi"],
                                          "descrizione"=> "Un dolce siciliano croccante e ricco di sapore, i cannoli sono cilindri di pasta fritta ripieni di una cremosa miscela di ricotta, zucchero a velo, cioccolato e canditi."
                                        ],
                                        [
                                          "nome"=> "Torta Tiramisù",
                                          "ingredienti"=> ["biscotti savoiardi", "mascarpone", "caffè", "cacao in polvere"],
                                          "descrizione"=> "Una variante della classica torta tiramisù, questa delizia è composta da strati di biscotti savoiardi inzuppati nel caffè e uno strato di mascarpone cremoso, il tutto finemente cosperso di cacao in polvere."
                                        ],
                                        [
                                          "nome"=> "Torta di Mele",
                                          "ingredienti"=> ["mele", "zucchero", "farina", "uova", "cannella"],
                                          "descrizione"=> "Una torta classica e comfort, la torta di mele è ricca di fette di mele saporite, zucchero, cannella e un morbido impasto, spesso servita calda con una pallina di gelato alla vaniglia."
                                        ]
                                      ]
                             ],

            

                "Francese"=>[  "primi"=> [
                    [
                      "nome"=> "Coq au Vin",
                      "ingredienti"=> ["pollo", "vino rosso", "cipolla", "funghi", "pancetta"],
                      "descrizione"=> "Il Coq au Vin è un piatto classico della cucina francese. Pollo cotto lentamente in un ricco sugo a base di vino rosso, cipolla, funghi e pancetta, creando un sapore profondo e avvolgente."
                    ],
                    [
                      "nome"=> "Bouillabaisse",
                      "ingredienti"=> ["pesce misto", "crostacei", "pomodoro", "alloro", "zafferano"],
                      "descrizione"=> "Una zuppa di pesce provenzale, la Bouillabaisse è preparata con una varietà di pesci misti e crostacei, cotti in un brodo a base di pomodoro, alloro e zafferano, servita con crostini e rouille."
                    ],
                    [
                      "nome"=> "Quiche Lorraine",
                      "ingredienti"=> ["pancetta", "uova", "panna", "formaggio gruyère", "noce moscata"],
                      "descrizione"=> "Un classico della cucina francese, la Quiche Lorraine è una torta salata con un ripieno cremoso di pancetta, uova, panna, formaggio gruyère e un pizzico di noce moscata."
                    ],
                    [
                      "nome"=> "Ratatouille",
                      "ingredienti"=> ["melanzane", "zucchine", "peperoni", "pomodoro", "aglio"],
                      "descrizione"=> "Un piatto provenzale, la Ratatouille è una gustosa miscela di melanzane, zucchine, peperoni, pomodoro e aglio, cotta lentamente fino a diventare un guiso aromatico e colorato."
                    ],
                    [
                      "nome"=> "Cassoulet",
                      "ingredienti"=> ["fagioli bianchi", "confit d'anatra", "salsicce", "carne di maiale", "aglio"],
                      "descrizione"=> "Un piatto rustico del sud della Francia, il Cassoulet è una zuppa densa a base di fagioli bianchi cotti lentamente con confit d'anatra, salsicce e carne di maiale, condita con aglio e aromi."
                    ],
                    [
                      "nome"=> "Soupe à l'Oignon",
                      "ingredienti"=> ["cipolle", "brodo di carne", "pane", "formaggio gruyère", "burro"],
                      "descrizione"=> "Una zuppa di cipolle ricca e saporita, la Soupe à l'Oignon è servita con crostini di pane coperti da formaggio gruyère fuso, creando una combinazione di sapori irresistibile."
                    ],
                    [
                      "nome"=> "Salade Niçoise",
                      "ingredienti"=> ["tonno", "uova sode", "fagiolini", "olive nere", "pomodori"],
                      "descrizione"=> "Una fresca insalata provenzale, la Salade Niçoise è composta da tonno, uova sode, fagiolini, olive nere, pomodori e condita con una vinaigrette all'olio d'oliva."
                    ],
                    [
                      "nome"=> "Escargot",
                      "ingredienti"=> [" lumache di Borgogna", "burro all'aglio", "prezzemolo", "vino bianco", "pane"],
                      "descrizione"=> "Una prelibatezza francese, gli Escargot sono lumache di Borgogna cotte in una deliziosa salsa di burro all'aglio e prezzemolo, servite con fette di pane croccante."
                    ],
                    [
                      "nome"=> "Crêpes",
                      "ingredienti"=> ["farina", "uova", "latte", "zucchero", "burro"],
                      "descrizione"=> "Le Crêpes sono sottili frittelle di pasta, versatili e adatte a dolci e salati. Possono essere farcite con una varietà di ingredienti, come Nutella, marmellata, formaggio o prosciutto."
                    ],
                    [
                      "nome"=> "Boucheé à la Reine",
                      "ingredienti"=> ["pasta sfoglia", "pollo", "funghi", "salsa velouté", "limone"],
                      "descrizione"=> "Un elegante antipasto francese, le Boucheé à la Reine sono piccole tartellette di pasta sfoglia ripiene di un mix di pollo, funghi e salsa velouté, con un tocco di limone fresco."
                    ]],
              
              
                    "secondi"=> [
                [
                  "nome"=> "Filet Mignon",
                  "ingredienti"=> ["filetto di manzo", "vino rosso", "scalogni", "funghi", "burro"],
                  "descrizione"=> "Un pezzo pregiato di filetto di manzo cotto al punto giusto e servito con una salsa al vino rosso, scalogni, funghi e burro, il Filet Mignon è un simbolo di lusso nella cucina francese."
                ],
                [
                  "nome"=> "Duck à l'Orange",
                  "ingredienti"=> ["anatra", "arancia", "zucchero", "aceto", "brodo di pollo"],
                  "descrizione"=> "Un piatto iconico della cucina francese, il Duck à l'Orange è anatra arrosto con una salsa agrodolce all'arancia, creando un contrasto perfetto tra dolce e salato."
                ],
                [
                  "nome"=> "Boeuf Bourguignon",
                  "ingredienti"=> ["carne di manzo", "vino rosso", "cipolle", "patate", "carote"],
                  "descrizione"=> "Un piatto comfort della Borgogna, il Boeuf Bourguignon è carne di manzo cotta lentamente in un ricco sugo a base di vino rosso, cipolle, patate e carote."
                ],
                [
                  "nome"=> "Cassoulet",
                  "ingredienti"=> ["fagioli bianchi", "confit d'anatra", "salsicce", "carne di maiale", "aglio"],
                  "descrizione"=> "Un piatto rustico del sud della Francia, il Cassoulet è una zuppa densa a base di fagioli bianchi cotti lentamente con confit d'anatra, salsicce e carne di maiale, condita con aglio e aromi."
                ],
                [
                  "nome"=> "Sole Meunière",
                  "ingredienti"=> ["filetto di sole", "burro", "limone", "prezzemolo", "farina"],
                  "descrizione"=> "Un piatto di pesce classico, il Sole Meunière è filetto di sole impanato in farina, cotto in una deliziosa salsa al burro, limone e prezzemolo."
                ],
                [
                  "nome"=> "Blanquette de Veau",
                  "ingredienti"=> ["carne di vitello", "cipolle", "funghi", "panna", "limone"],
                  "descrizione"=> "Un piatto tradizionale francese, la Blanquette de Veau è carne di vitello cotta lentamente in una salsa cremosa a base di cipolle, funghi, panna e limone."
                ],
                [
                  "nome"=> "Magret de Canard",
                  "ingredienti"=> ["petto d'anatra", "miele", "arancia", "cognac", "timo"],
                  "descrizione"=> "Un piatto di petto d'anatra grigliato, il Magret de Canard è servito con una salsa al miele, arancia, cognac e timo, creando un contrasto di sapori complesso e delizioso."
                ],
                [
                  "nome"=> "Quenelle de Brochet",
                  "ingredienti"=> ["quenelle di luccio", "salsa di gamberi", "riso", "burro", "pomodoro"],
                  "descrizione"=> "Un piatto delicato della cucina lione, le Quenelle de Brochet sono quenelle di luccio servite con una salsa di gamberi su un letto di riso, condite con burro e pomodoro."
                ],
                [
                  "nome"=> "Poulet à la Moutarde",
                  "ingredienti"=> ["pollo", "senape di Digione", "vino bianco", "cipolla", "pomodoro"],
                  "descrizione"=> "Un piatto di pollo in salsa di senape di Digione e vino bianco, il Poulet à la Moutarde è spesso arricchito con cipolla e pomodoro per un sapore robusto."
                ],
                [
                  "nome"=> "Tartiflette",
                  "ingredienti"=> ["patate", "lardoons", "cipolla", "formaggio Reblochon", "vino bianco"],
                  "descrizione"=> "Un piatto montano, la Tartiflette è una gratinata di patate con lardoons, cipolla, formaggio Reblochon e un tocco di vino bianco, creando un comfort food irresistibile."
                ]
                ],
              "dolci"=> [
                [
                  "nome"=> "Crème Brûlée",
                  "ingredienti"=> ["crema", "zucchero", "vaniglia", "tuorli d'uovo"],
                  "descrizione"=> "La Crème Brûlée è un dessert francese iconico. Una crema vellutata alla vaniglia cotta al forno, cosparsa di zucchero e caramellata con un cannello per creare una crosta croccante."
                ],
                [
                  "nome"=> "Tarte Tatin",
                  "ingredienti"=> ["mele", "pasta sfoglia", "zucchero", "burro"],
                  "descrizione"=> "Una deliziosa torta di mele capovolta, la Tarte Tatin è preparata con mele caramellate in zucchero e burro, ricoperte da un foglio di pasta sfoglia dorata."
                ],
                [
                  "nome"=> "Mille-Feuille",
                  "ingredienti"=> ["pasta sfoglia", "crema pasticcera", "zucchero a velo", "cioccolato"],
                  "descrizione"=> "Un dessert elegante, il Mille-Feuille è composto da strati di pasta sfoglia croccante, crema pasticcera e glassa di cioccolato, spolverato con zucchero a velo."
                ],
                [
                  "nome"=> "Profiteroles",
                  "ingredienti"=> ["pasta choux", "gelato", "cioccolato caldo"],
                  "descrizione"=> "Piccoli bocconcini di pasta choux ripieni di gelato e ricoperti di cioccolato caldo, i Profiteroles sono un dessert indulgente e delizioso."
                ],
                [
                  "nome"=> "Madeleines",
                  "ingredienti"=> ["farina", "zucchero", "burro", "uova", "limone"],
                  "descrizione"=> "Piccoli dolcetti a forma di conchiglia, le Madeleines sono leggere e profumate, spesso preparate con scorza di limone per un tocco di freschezza."
                ]
                  ]
                    ] ,

            

              "Giapponese"=> ["primi"=> [
                [
                  "nome"=> "Sushi",
                  "ingredienti"=> ["riso", "pesce fresco", "alghe nori", "wasabi", "zenzero marinato"],
                  "descrizione"=> "Il sushi è un'iconica pietanza giapponese. Si tratta di piccoli bocconcini di riso aromatizzato, generalmente accompagnati da pesce fresco, avvolti in fogli di alga nori. Il sushi è spesso servito con wasabi (raffinata pasta di ravanello piccante) e zenzero marinato."
                ],
                [
                  "nome"=> "Sashimi",
                  "ingredienti"=> ["pesce fresco", "wasabi", "salsa di soia"],
                  "descrizione"=> "Il sashimi è una delizia giapponese di pesce crudo affettato finemente. Il pesce fresco viene servito con wasabi e salsa di soia per esaltarne il sapore naturale e la freschezza."
                ],
                [
                  "nome"=> "Ramen",
                  "ingredienti"=> ["noodles", "brodo di carne o pesce", "carne di maiale o pollo", "uovo", "cetriolo"],
                  "descrizione"=> "Una popolare zuppa giapponese, il ramen è preparato con noodles in brodo di carne o pesce, solitamente conditi con carne di maiale o pollo, uova sode e fette di cetriolo. È un comfort food molto apprezzato in Giappone."
                ],
                [
                  "nome"=> "Tempura",
                  "ingredienti"=> ["verdure", "gamberi", "impasto leggero", "salsa tempura"],
                  "descrizione"=> "La tempura è una tecnica di frittura leggera giapponese. Verdure fresche e gamberi vengono immersi in un impasto leggero e fritti fino a diventare croccanti. È servita con salsa tempura per un tocco di sapore."
                ],
                [
                  "nome"=> "Udon",
                  "ingredienti"=> ["udon", "brodo dashi", "alga kombu", "scalogno", "tempura"],
                  "descrizione"=> "Gli udon sono spessi noodles giapponesi serviti in un brodo dashi, spesso aromatizzato con alga kombu e scalogno. Possono essere arricchiti con tempura croccante."
                ],
                [
                  "nome"=> "Yakitori",
                  "ingredienti"=> ["pollo", "spiedini", "salsa tare", "negi", "sesamo"],
                  "descrizione"=> "Lo yakitori è un'opzione popolare di street food giapponese. Pezzi di pollo marinati vengono infilzati su spiedini e grigliati fino a ottenere una deliziosa cottura, quindi spennellati con salsa tare e spolverati con negi (cipollotti) e sesamo."
                ],
                [
                  "nome"=> "Onigiri",
                  "ingredienti"=> ["riso", "nori", "ripieno", "sale", "sesamo"],
                  "descrizione"=> "Gli onigiri sono piccoli triangoli di riso avvolti in fogli di alga nori. Possono contenere vari ripieni, come tonno, umeboshi (prugne salate) o altri ingredienti a scelta. Sono un snack portatile molto amato in Giappone."
                ],
                [
                  "nome"=> "Gyoza",
                  "ingredienti"=> ["carne di maiale o pollo", "verdure", "impasto sottile", "salsa dipping"],
                  "descrizione"=> "I gyoza sono ravioli giapponesi ripieni di carne di maiale o pollo e verdure. Sono cotti fino a diventare dorati e croccanti su un lato, poi serviti con una salsa dipping."
                ],
                [
                  "nome"=> "Okonomiyaki",
                  "ingredienti"=> ["cavolo grattugiato", "uova", "farina", "bacon", "salsa okonomiyaki"],
                  "descrizione"=> "L'okonomiyaki è una sorta di frittata giapponese. Il cavolo grattugiato, le uova e la farina vengono mescolati insieme con strisce di bacon e cotti su una piastra. Sono poi conditi con salsa okonomiyaki e maionese giapponese."
                ],
                [
                  "nome"=> "Chirashi Sushi",
                  "ingredienti"=> ["riso condito", "pesce crudo misto", "verdure sottaceto", "tamago", "nori"],
                  "descrizione"=> "Il chirashi sushi è un piatto di riso condito coperto con una varietà di pesce crudo misto, verdure sottaceto, frittata di tamago e strisce di alga nori. È un modo colorato e gustoso di gustare il sushi in stile giapponese."
                ]
                ],
              "secondi"=> [
                [
                  "nome"=> "Sukiyaki",
                  "ingredienti"=> ["bistecca di manzo sottile", "tofu", "verdure", "shirataki", "salsa sukiyaki"],
                  "descrizione"=> "Lo sukiyaki è un piatto giapponese in cui fettine sottili di bistecca di manzo vengono cotte in una pentola con tofu, verdure, shirataki (noodles di konjac) e salsa sukiyaki."
                ],
                [
                  "nome"=> "Tonkatsu",
                  "ingredienti"=> ["cotoletta di maiale", "panatura croccante", "cavolo", "salsa tonkatsu"],
                  "descrizione"=> "Il tonkatsu è una cotoletta di maiale impanata e fritta servita con cavolo fresco e salsa tonkatsu, una salsa dolce e ricca."
                ],
                [
                  "nome"=> "Yakizakana",
                  "ingredienti"=> ["pesce alla griglia", "salsa teriyaki", "limone", "sesamo", "wasabi"],
                  "descrizione"=> "Il yakizakana è pesce alla griglia glassato con salsa teriyaki, quindi servito con fette di limone e spolverato con sesamo e wasabi."
                ],
                [
                  "nome"=> "Nabemono",
                  "ingredienti"=> ["brodo dashi", "verdure", "tofu", "carne o pesce", "noodles"],
                  "descrizione"=> "Il nabemono è un piatto caldo di stufato giapponese. Il brodo dashi è la base e viene aggiunto con verdure, tofu, carne o pesce e spesso completato con noodles."
                ],
                [
                  "nome"=> "Gindara Saikyoyaki",
                  "ingredienti"=> ["salmone nero", "marinatura miso", "mirin", "zucchero", "salsa di soia"],
                  "descrizione"=> "Il gindara saikyoyaki è un piatto di salmone nero marinato in una miscela di miso, mirin, zucchero e salsa di soia, quindi grigliato per creare una crosta dolce e ricca."
                ],
                [
                  "nome"=> "Ebi Tempura",
                  "ingredienti"=> ["gamberi", "impasto leggero", "salsa tempura", "cetriolo", "wasabi"],
                  "descrizione"=> "Gli ebi tempura sono gamberi interi ricoperti di impasto leggero e fritti fino a diventare croccanti. Sono serviti con salsa tempura, fette di cetriolo e wasabi."
                ],
                [
                  "nome"=> "Unagi Don",
                  "ingredienti"=> ["anguilla alla griglia", "salsa kabayaki", "riso", "alga nori", "sesamo"],
                  "descrizione"=> "L'unagi don è una ciotola di riso coperta con anguilla alla griglia e salsa kabayaki, poi decorata con strisce di alga nori e sesamo."
                ],
                [
                  "nome"=> "Tori Karaage",
                  "ingredienti"=> ["pollo marinato", "impasto croccante", "salsa di soia", "limone", "sesamo"],
                  "descrizione"=> "Il tori karaage è pollo marinato fritto in un impasto croccante, servito con salsa di soia, fette di limone e spolverato con sesamo."
                ],
                [
                  "nome"=> "Buta no Kakuni",
                  "ingredienti"=> ["carne di maiale", "salsa di soia", "zucchero", "mirin", "uova"],
                  "descrizione"=> "Il buta no kakuni è carne di maiale cotta lentamente in una salsa dolce a base di salsa di soia, zucchero, mirin e uova, fino a diventare tenera e saporita."
                ],
                [
                  "nome"=> "Yakitori",
                  "ingredienti"=> ["pollo", "spiedini", "salsa tare", "negi", "sesamo"],
                  "descrizione"=> "Lo yakitori è un'opzione popolare di street food giapponese. Pezzi di pollo marinati vengono infilzati su spiedini e grigliati fino a ottenere una deliziosa cottura, quindi spennellati con salsa tare e spolverati con negi (cipollotti) e sesamo."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Matcha Ice Cream",
                  "ingredienti"=> ["gelato al tè matcha", "zucchero", "matcha in polvere", "latte"],
                  "descrizione"=> "Il gelato al tè matcha è un dolce giapponese molto amato. È realizzato con latte, tè matcha in polvere, zucchero e ha un sapore unico e ricco, perfetto per gli amanti del tè verde."
                ],
                [
                  "nome"=> "Dorayaki",
                  "ingredienti"=> ["pancake dolce", "animaletti rossi", "ripieno di anko"],
                  "descrizione"=> "Il dorayaki è un dolce giapponese composto da due pancake dolci sottili, generalmente con una forma simile a quella di un animaletto rosso. Sono farciti con un ripieno dolce di anko, una pasta di fagioli dolci."
                ],
                [
                  "nome"=> "Mochi",
                  "ingredienti"=> ["mochiko (farina di riso glutinoso)", "ripieno dolce", "amido di mais"],
                  "descrizione"=> "I mochi sono dolcetti giapponesi masticabili preparati con farina di riso glutinoso. Possono avere vari ripieni dolci, come anko (pasta di fagioli dolci) o frutta, e sono spesso spolverati con amido di mais per evitare che si appiccichino."
                ],
                [
                  "nome"=> "Taiyaki",
                  "ingredienti"=> ["pastella dolce", "ripieno di anko", "forme di pesce"],
                  "descrizione"=> "Il taiyaki è un dolce giapponese a forma di pesce. È realizzato con una pastella dolce riempita di anko o altri ripieni dolci, e viene cotto fino a diventare croccante all'esterno e morbido all'interno."
                ],
                [
                  "nome"=> "Yuzu Sorbet",
                  "ingredienti"=> ["sorbetto al yuzu", "zucchero", "acqua"],
                  "descrizione"=> "Il sorbetto al yuzu è un dessert rinfrescante. È fatto con il succo di yuzu, uno degli agrumi giapponesi più profumati, mescolato con zucchero e acqua, creando un sorbetto aromatico e leggermente amaro."
                ]
                 ]
                ],

              "Messicano"=>[ "primi"=> [
                [
                  "nome"=> "Tacos al Pastor",
                  "ingredienti"=> ["maiale marinato", "tortillas di mais", "cipolla", "ananas", "salsa al pastor"],
                  "descrizione"=> "I tacos al pastor sono un classico messicano. Fette sottili di maiale marinato vengono grigliate e servite in tortillas di mais con cipolla, ananas e salsa al pastor per un sapore audace e appagante."
                ],
                [
                  "nome"=> "Chiles en Nogada",
                  "ingredienti"=> ["peperoni poblanos", "ripieno di carne e frutta", "salsa di nogada", "semi di melograno", "prezzemolo"],
                  "descrizione"=> "I chiles en nogada sono un piatto messicano tradizionale. Peperoni poblanos vengono farciti con un ripieno di carne macinata, frutta e spezie, poi ricoperti con una salsa di nogada cremosa e decorati con semi di melograno e prezzemolo."
                ],
                [
                  "nome"=> "Tamales",
                  "ingredienti"=> ["mais nixtamalizzato", "ripieno di carne o formaggio", "foglie di mais", "salsa"],
                  "descrizione"=> "I tamales sono una specialità messicana. Sono realizzati con mais nixtamalizzato che viene spalmato con un ripieno di carne o formaggio, quindi avvolti in foglie di mais e cotti a vapore. Sono spesso serviti con salsa per un sapore extra."
                ],
                [
                  "nome"=> "Pozole",
                  "ingredienti"=> ["mais omoscano", "carne di maiale o pollo", "cipolla", "peperoncino secco", "insalata"],
                  "descrizione"=> "Il pozole è una zuppa messicana. È preparato con mais omoscano cotto lentamente con carne di maiale o pollo, servito con cipolla, peperoncino secco e insalata. È un piatto ricco e soddisfacente."
                ],
                [
                  "nome"=> "Enchiladas",
                  "ingredienti"=> ["tortillas di mais", "ripieno di carne o formaggio", "salsa di pomodoro", "formaggio", "cipolla"],
                  "descrizione"=> "Le enchiladas sono tortillas di mais ripiene di carne o formaggio, arrotolate e coperte con salsa di pomodoro e formaggio fuso. Possono essere arricchite con cipolla e guarnite con una varietà di condimenti."
                ],
                [
                  "nome"=> "Ceviche",
                  "ingredienti"=> ["pesce fresco", "limone", "cipolla", "peperoncino", "coriandolo"],
                  "descrizione"=> "Il ceviche è un piatto di pesce crudo marinato in succo di limone con cipolla, peperoncino e coriandolo. La freschezza degli ingredienti lo rende una delizia leggera e rinfrescante."
                ],
                [
                  "nome"=> "Mole Poblano",
                  "ingredienti"=> ["pollo", "salsa di mole", "tortillas", "semi di sesamo", "cipolla rossa"],
                  "descrizione"=> "Il mole poblano è un piatto complesso e gustoso. Pollo cotto lentamente viene ricoperto con una salsa di mole ricca e speziata, quindi servito con tortillas, semi di sesamo e cipolla rossa."
                ],
                [
                  "nome"=> "Sopes",
                  "ingredienti"=> ["base di mais", "fagioli refried", "carne", "lattuga", "formaggio"],
                  "descrizione"=> "I sopes sono piccole basi di mais con bordi rialzati, spalmate con fagioli refried e poi guarnite con carne, lattuga e formaggio. Sono piatti saporiti e molto popolari in Messico."
                ],
                [
                  "nome"=> "Tacos de Barbacoa",
                  "ingredienti"=> ["barbacoa di carne di montone", "cipolla", "coriandolo", "salsa verde", "tortillas di mais"],
                  "descrizione"=> "I tacos de barbacoa presentano carne di montone cotta lentamente e servita in tortillas di mais con cipolla, coriandolo e salsa verde per un sapore robusto e appagante."
                ],
                [
                  "nome"=> "Gorditas",
                  "ingredienti"=> ["dischi di mais", "ripieno di carne", "lattuga", "formaggio", "salsa piccante"],
                  "descrizione"=> "Le gorditas sono dischi di mais farciti con carne, lattuga, formaggio e salsa piccante. Sono un piatto messicano soddisfacente e ricco di sapore."
                ]
              ],
              "secondi"=> [
                [
                  "nome"=> "Carne Asada",
                  "ingredienti"=> ["bistecca di manzo marinata", "cipolla", "salsa chimichurri", "tortillas di mais", "limone"],
                  "descrizione"=> "La carne asada è bistecca di manzo marinata e grigliata, spesso servita con cipolla, salsa chimichurri, tortillas di mais e lime."
                ],
                [
                  "nome"=> "Pollo con Mole",
                  "ingredienti"=> ["pollo", "salsa di mole", "riso", "fagioli refried", "tortillas di mais"],
                  "descrizione"=> "Il pollo con mole è un piatto classico. Pollo cotto lentamente è coperto con una salsa di mole ricca e servito con riso, fagioli refried e tortillas di mais."
                ],
                [
                  "nome"=> "Chiles Rellenos",
                  "ingredienti"=> ["peperoni poblanos", "ripieno di carne e formaggio", "salsa di pomodoro", "formaggio", "crema acida"],
                  "descrizione"=> "I chiles rellenos sono peperoni poblanos ripieni di carne e formaggio, quindi ricoperti di salsa di pomodoro, formaggio fuso e crema acida. Sono piatti abbondanti e deliziosi."
                ],
                [
                  "nome"=> "Birria",
                  "ingredienti"=> ["carne di montone", "brodo di birria", "cipolla", "coriandolo", "tortillas di mais"],
                  "descrizione"=> "La birria è un guiso di carne di montone marinata in brodo di birria speziato. Viene spesso servito con cipolla, coriandolo e tortillas di mais."
                ],
                [
                  "nome"=> "Tacos de Carnitas",
                  "ingredienti"=> ["carne di maiale cotta lentamente", "cipolla", "coriandolo", "salsa verde", "tortillas di mais"],
                  "descrizione"=> "I tacos de carnitas presentano carne di maiale cotta lentamente con cipolla, coriandolo e salsa verde, serviti in tortillas di mais per un sapore succoso e saporito."
                ],
                [
                  "nome"=> "Tamales de Elote",
                  "ingredienti"=> ["tamale di mais", "formaggio", "salsa verde", "crema acida", "cipolla rossa"],
                  "descrizione"=> "I tamales de elote sono tamales di mais farciti con formaggio, salsa verde, crema acida e cipolla rossa. Sono un piatto messicano apprezzato per il loro sapore."
                ],
                [
                  "nome"=> "Cochinita Pibil",
                  "ingredienti"=> ["maiale marinato", "achiote", "cipolla", "tortillas di mais", "salsa habanero"],
                  "descrizione"=> "La cochinita pibil è maiale marinato con achiote e cotto lentamente, servito con cipolla, tortillas di mais e salsa habanero per un sapore audace e piccante."
                ],
                [
                  "nome"=> "Tacos de Lengua",
                  "ingredienti"=> ["lingua di manzo cotta lentamente", "cipolla", "coriandolo", "salsa verde", "tortillas di mais"],
                  "descrizione"=> "I tacos de lengua presentano lingua di manzo cotta lentamente con cipolla, coriandolo e salsa verde, serviti in tortillas di mais per un sapore unico e delizioso."
                ],
                [
                  "nome"=> "Pescado a la Veracruzana",
                  "ingredienti"=> ["pesce bianco", "salsa di Veracruz", "cipolla", "peperoni", "olive"],
                  "descrizione"=> "Il pescado a la Veracruzana è pesce bianco cotto in una salsa di Veracruz con cipolla, peperoni e olive. È un piatto di mare delizioso."
                ],
                [
                  "nome"=> "Tacos de Tripa",
                  "ingredienti"=> ["tripa di maiale croccante", "cipolla", "coriandolo", "salsa verde", "tortillas di mais"],
                  "descrizione"=> "I tacos de tripa presentano tripa di maiale croccante con cipolla, coriandolo e salsa verde, serviti in tortillas di mais per un sapore audace e croccante."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Churros",
                  "ingredienti"=> ["pasta di choux", "zucchero", "cannella", "cioccolato caldo"],
                  "descrizione"=> "I churros sono dolci fritti, spolverati con zucchero e cannella, spesso serviti con cioccolato caldo per l'immersione."
                ],
                [
                  "nome"=> "Tres Leches Cake",
                  "ingredienti"=> ["pan di spagna", "latte condensato", "latte evaporato", "panna montata", "ciliegie"],
                  "descrizione"=> "Il tres leches cake è un dolce a base di pan di spagna immerso in una miscela di latte condensato e latte evaporato, quindi coperto con panna montata e ciliegie."
                ],
                [
                  "nome"=> "Flan",
                  "ingredienti"=> ["uova", "latte condensato", "caramello", "vaniglia", "scorza d'arancia"],
                  "descrizione"=> "Il flan è un dessert cremoso a base di uova, latte condensato e vaniglia, con un delizioso strato di caramello in cima. La scorza d'arancia può aggiungere una nota di freschezza."
                ],
                [
                  "nome"=> "Arroz con Leche",
                  "ingredienti"=> ["riso", "latte", "zucchero", "cannella", "vaniglia"],
                  "descrizione"=> "L'arroz con leche è un dessert di riso dolce cotto con latte, zucchero, cannella e vaniglia. È un comfort food dolce e delizioso."
                ],
                [
                  "nome"=> "Tamarindo Candy",
                  "ingredienti"=> ["pasta di tamarindo", "zucchero", "peperoncino in polvere", "sale"],
                  "descrizione"=> "I tamarindo candy sono caramelle dolci e leggermente piccanti fatte con pasta di tamarindo, zucchero, peperoncino in polvere e sale. Sono un'esplosione di sapore in bocca."
                ]
              ]],

              "Cinese"=>["primi"=> [
                [
                  "nome"=> "Ravioli al Vapore (Jiaozi)",
                  "ingredienti"=> ["pasta all'uovo", "ripieno di carne o verdure", "salsa di soia", "aceto di riso"],
                  "descrizione"=> "I ravioli al vapore, conosciuti come jiaozi in Cina, sono dei deliziosi pacchetti di pasta all'uovo ripieni di carne macinata o verdure. Vengono cotti al vapore e serviti con salsa di soia e aceto di riso per un sapore equilibrato e avvolgente."
                ],
                [
                  "nome"=> "Noodles al Sichuan",
                  "ingredienti"=> ["noodles di frumento", "carne di maiale", "peperoncino", "brodo di pollo", "verdure"],
                  "descrizione"=> "I noodles al Sichuan sono famosi per il loro sapore audace e piccante. Sono preparati con noodles di frumento serviti in una zuppa ricca di carne di maiale, peperoncino, brodo di pollo e verdure."
                ],
                [
                  "nome"=> "Risotto al Curry Cantonese",
                  "ingredienti"=> ["riso", "gamberetti", "pollo", "curry in polvere", "verdure"],
                  "descrizione"=> "Il risotto al curry cantonese è una pietanza unica che combina riso con gamberetti, pollo, curry in polvere e verdure. È noto per il suo sapore aromatico e leggermente piccante."
                ],
                [
                  "nome"=> "Zuppa Wonton",
                  "ingredienti"=> ["wonton ripieni", "brodo di pollo", "cipolla verde", "zenzero", "acqua di sesamo"],
                  "descrizione"=> "La zuppa wonton è una zuppa di wonton ripieni di carne o gamberetti in un brodo di pollo profumato. È spesso guarnita con cipolla verde, zenzero grattugiato e un po' di acqua di sesamo per un tocco di freschezza."
                ],
                [
                  "nome"=> "Pancake alla Cipolla Verde",
                  "ingredienti"=> ["cipolla verde", "farina di frumento", "olio di sesamo", "salsa di soia"],
                  "descrizione"=> "I pancake alla cipolla verde sono sottili dischi di pasta di farina di frumento cotti in padella con cipolla verde e olio di sesamo. Sono spesso serviti con salsa di soia per un antipasto leggero e saporito."
                ],
                [
                  "nome"=> "Congee",
                  "ingredienti"=> ["riso", "brodo di pollo", "uova sode", "cipolla verde", "zenzero"],
                  "descrizione"=> "Il congee è una zuppa di riso cinese cremosa e confortante. È preparato cuocendo il riso in brodo di pollo fino a ottenere una consistenza vellutata, poi viene guarnito con uova sode, cipolla verde e zenzero."
                ],
                [
                  "nome"=> "Tofu Saltato al Peperoncino",
                  "ingredienti"=> ["tofu", "peperoncino fresco", "aglio", "salsa di soia", "cipolla verde"],
                  "descrizione"=> "Il tofu saltato al peperoncino è un piatto vegetariano piccante. Il tofu viene tagliato a cubetti e saltato con peperoncino fresco, aglio, salsa di soia e cipolla verde per un sapore audace e saporito."
                ],
                [
                  "nome"=> "Verdure in Salsa all'Agrodolce",
                  "ingredienti"=> ["verdure miste", "salsa all'agrodolce", "cipolla", "peperoni", "ananas"],
                  "descrizione"=> "Le verdure in salsa all'agrodolce sono un piatto agridolce cinese. Le verdure miste vengono messe in padella con salsa all'agrodolce, cipolla, peperoni e ananas per un sapore equilibrato tra dolce e piccante."
                ],
                [
                  "nome"=> "Pasta di Fagioli (Doubanjiang Mian)",
                  "ingredienti"=> ["pasta di fagioli piccante", "noodles di frumento", "cipolla verde", "aglio", "aceto di riso"],
                  "descrizione"=> "La pasta di fagioli piccante è il protagonista di questo piatto. Viene mescolata con noodles di frumento e guarnita con cipolla verde, aglio e un po' di aceto di riso per un sapore piccante e saporito."
                ],
                [
                  "nome"=> "Zuppa Hot Pot",
                  "ingredienti"=> ["brodo di pollo", "carne sottile", "verdure fresche", "funghi", "salsa di immersione"],
                  "descrizione"=> "La zuppa hot pot è un pasto interattivo in cui i commensali cuociono carne sottile e verdure fresche in un brodo di pollo bollente. È un'esperienza divertente e deliziosa."
                ]
              ],
              "secondi"=> [
                [
                  "nome"=> "Manzo all'Arancia",
                  "ingredienti"=> ["fettine di manzo", "salsa all'arancia", "zenzero", "peperoncino", "cipolla"],
                  "descrizione"=> "Il manzo all'arancia è un piatto agrodolce con fettine di manzo in salsa all'arancia, zenzero, peperoncino e cipolla. È noto per il suo sapore equilibrato e appagante."
                ],
                [
                  "nome"=> "Pollo alla Kung Pao",
                  "ingredienti"=> ["pollo", "arachidi", "peperoncino rosso", "cipolla", "salsa Kung Pao"],
                  "descrizione"=> "Il pollo alla Kung Pao è una pietanza piccante con pezzi di pollo, arachidi, peperoncino rosso, cipolla e salsa Kung Pao. È una combinazione di sapori audaci."
                ],
                [
                  "nome"=> "Anatra alla Pechinese",
                  "ingredienti"=> ["anatra cotta a vapore", "pancake sottili", "salsa hoisin", "cipolla verde", "cetrioli"],
                  "descrizione"=> "L'anatra alla pechinese è una pietanza iconica con anatra cotta a vapore, pancake sottili, salsa hoisin, cipolla verde e cetrioli. È una prelibatezza croccante e saporita."
                ],
                [
                  "nome"=> "Maiale Agrodolce",
                  "ingredienti"=> ["carne di maiale a strisce", "salsa agrodolce", "peperoni", "cipolla", "ananas"],
                  "descrizione"=> "Il maiale agrodolce è una pietanza agridolce con carne di maiale a strisce, salsa agrodolce, peperoni, cipolla e ananas. È noto per il suo sapore equilibrato e la sua croccantezza."
                ],
                [
                  "nome"=> "Gamberetti al Curry",
                  "ingredienti"=> ["gamberetti", "curry in polvere", "latte di cocco", "cipolla", "peperoni"],
                  "descrizione"=> "I gamberetti al curry sono gamberetti cucinati in una salsa cremosa al curry con latte di cocco, cipolla e peperoni. Sono noti per il loro sapore ricco e speziato."
                ],
                [
                  "nome"=> "Pesce al Vapore con Zenzero",
                  "ingredienti"=> ["pesce bianco", "zenzero", "cipolla verde", "salsa di soia", "olio di sesamo"],
                  "descrizione"=> "Il pesce al vapore con zenzero è un piatto leggero e salutare. Il pesce bianco viene cotto al vapore con fette di zenzero, cipolla verde, salsa di soia e olio di sesamo per un sapore fresco e delicato."
                ],
                [
                  "nome"=> "Costolette di Maiale al Miele",
                  "ingredienti"=> ["costolette di maiale", "miele", "aglio", "soia", "sesamo"],
                  "descrizione"=> "Le costolette di maiale al miele sono marinate in una miscela di miele, aglio, salsa di soia e sesamo, quindi grigliate per ottenere un sapore dolce e affumicato."
                ],
                [
                  "nome"=> "Agnello al Curry",
                  "ingredienti"=> ["carne di agnello", "curry in polvere", "cipolla", "zenzero", "peperoncino"],
                  "descrizione"=> "L'agnello al curry è un piatto speziato con carne di agnello, curry in polvere, cipolla, zenzero e peperoncino. È noto per il suo sapore ricco e aromatico."
                ],
                [
                  "nome"=> "Melanzane in Salsa d'Aglio",
                  "ingredienti"=> ["melanzane", "salsa d'aglio", "cipolla", "peperoncino", "salsa di soia"],
                  "descrizione"=> "Le melanzane in salsa d'aglio sono un piatto vegetariano con melanzane cotte in una salsa d'aglio, cipolla, peperoncino e salsa di soia. Sono noti per il loro sapore agrodolce e piccante."
                ],
                [
                  "nome"=> "Gamberi con Broccoli",
                  "ingredienti"=> ["gamberi", "broccoli", "aglio", "salsa di soia", "olio di sesamo"],
                  "descrizione"=> "I gamberi con broccoli sono un piatto leggero e saporito. I gamberi vengono saltati in padella con broccoli, aglio, salsa di soia e olio di sesamo per un sapore fresco e croccante."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Ananas Caramellato",
                  "ingredienti"=> ["fette di ananas", "zucchero di canna", "cannella", "gelato alla vaniglia"],
                  "descrizione"=> "L'ananas caramellato è un dolce semplice ma delizioso. Le fette di ananas vengono caramellate con zucchero di canna e cannella, quindi servite con gelato alla vaniglia per un contrasto di sapori."
                ],
                [
                  "nome"=> "Dolce di Fagioli Rossi (Tangyuan)",
                  "ingredienti"=> ["pasta di fagioli rossi", "sciroppo di zucchero", "sesamo", "cocco grattugiato"],
                  "descrizione"=> "Il dolce di fagioli rossi, noto anche come tangyuan, è un dessert tradizionale cinese. Consiste in palline di pasta di fagioli rossi servite in uno sciroppo di zucchero dolce e guarnite con sesamo e cocco grattugiato."
                ],
                [
                  "nome"=> "Torta agli Zenzero",
                  "ingredienti"=> ["zenzero fresco", "zucchero", "farina", "uova", "crema al limone"],
                  "descrizione"=> "La torta agli zenzero è un dolce leggero e aromatico. È preparata con zenzero fresco grattugiato, zucchero, farina e uova, e spesso è servita con una crema al limone per un tocco di freschezza."
                ],
                [
                  "nome"=> "Bocconcini di Sesamo",
                  "ingredienti"=> ["sesamo", "miele", "zucchero", "cannella", "noci"],
                  "descrizione"=> "I bocconcini di sesamo sono dolcetti croccanti preparati con semi di sesamo, miele, zucchero, cannella e noci. Sono perfetti come spuntino o dessert."
                ],
                [
                  "nome"=> "Gelato al Tè Verde",
                  "ingredienti"=> ["latte", "crema", "tè verde in polvere", "zucchero", "tuorli d'uovo"],
                  "descrizione"=> "Il gelato al tè verde è un dessert cremoso e rinfrescante. È preparato con latte, crema, tè verde in polvere, zucchero e tuorli d'uovo, e ha un sapore unico e leggermente amaro."
                ]
              ]],

              "Americano"=>[ "primi"=> [
                [
                  "nome"=> "Mac 'n' Cheese",
                  "ingredienti"=> ["pasta", "formaggio cheddar", "latte", "burro", "pancetta"],
                  "descrizione"=> "Il Mac 'n' Cheese è un comfort food americano. Pasta gommosa cotta in una cremosa salsa di formaggio cheddar, spesso arricchita con pancetta croccante per un piatto irresistibile."
                ],
                [
                  "nome"=> "Gumbo",
                  "ingredienti"=> ["pollo", "salsiccia andouille", "gamberi", "peperoni", "riso"],
                  "descrizione"=> "Il Gumbo è una zuppa creola ricca e speziata. Contiene pollo, salsiccia andouille, gamberi e peperoni, servita su riso per una delizia del Sud."
                ],
                [
                  "nome"=> "Chili con Carne",
                  "ingredienti"=> ["carne macinata", "fagioli", "peperoni", "cipolla", "pomodori"],
                  "descrizione"=> "Il Chili con Carne è un piatto piccante e saporito. Carne macinata cotta con fagioli, peperoni, cipolla e pomodori per una ricetta appagante."
                ],
                [
                  "nome"=> "Clam Chowder",
                  "ingredienti"=> ["vongole", "patate", "cipolla", "pancetta", "pasta di mais"],
                  "descrizione"=> "Il Clam Chowder è una zuppa di vongole cremosa. Le vongole sono cotte con patate, cipolla e pancetta, spesso servite in una crosta di pasta di mais."
                ],
                [
                  "nome"=> "Jambalaya",
                  "ingredienti"=> ["riso", "pollo", "salsiccia andouille", "gamberi", "peperoni"],
                  "descrizione"=> "Il Jambalaya è un piatto creolo speziato. Preparato con riso, pollo, salsiccia andouille, gamberi e peperoni, è una festa di sapori della Louisiana."
                ],
                [
                  "nome"=> "Fettuccine Alfredo",
                  "ingredienti"=> ["fettuccine", "panna", "burro", "parmigiano", "noce moscata"],
                  "descrizione"=> "Le Fettuccine Alfredo sono un classico italiano reinterpretato in stile americano. Pasta fettuccine condita con una cremosa salsa di panna, burro, parmigiano e una spolverata di noce moscata."
                ],
                [
                  "nome"=> "Hamburger",
                  "ingredienti"=> ["carne macinata", "panino", "formaggio", "lattuga", "pomodoro"],
                  "descrizione"=> "L'Hamburger è un'icona dell'America. Carne macinata grigliata servita in un panino con formaggio, lattuga e pomodoro, spesso accompagnato da patatine fritte."
                ],
                [
                  "nome"=> "Barbecue Ribs",
                  "ingredienti"=> ["costine di maiale", "salsa barbecue", "mais", "insalata di cavolo", "fagioli al forno"],
                  "descrizione"=> "Le Barbecue Ribs sono costine di maiale lentamente cotte e glassate con salsa barbecue. Solitamente accompagnate da mais, insalata di cavolo e fagioli al forno."
                ],
                [
                  "nome"=> "Pollo Fritto",
                  "ingredienti"=> ["pollo", "farina", "spezie", "mais", "purè di patate"],
                  "descrizione"=> "Il Pollo Fritto è un piatto croccante e succulento. Pezzi di pollo impanati e fritti, spesso serviti con mais e purè di patate."
                ],
                [
                  "nome"=> "Taco",
                  "ingredienti"=> ["tortilla", "carne macinata", "salsa", "formaggio", "insalata"],
                  "descrizione"=> "Il Taco è un classico street food americano. Tortilla ripiena di carne macinata, salsa, formaggio e insalata, perfetta per un pasto veloce."
                ]
              ],
              "secondi"=> [
                [
                  "nome"=> "Steakhouse Ribeye",
                  "ingredienti"=> ["bistecca ribeye", "sale", "pepe", "rosmarino", "burro all'aglio"],
                  "descrizione"=> "La Steakhouse Ribeye è una bistecca succulenta grigliata con sale, pepe, rosmarino e burro all'aglio. Un piatto da steakhouse classico."
                ],
                [
                  "nome"=> "Fried Chicken",
                  "ingredienti"=> ["pollo", "farina", "spezie", "salsa piccante", "sottaceti"],
                  "descrizione"=> "Il Fried Chicken è pollo croccante fritto in una crosta di farina e spezie. Spesso accompagnato da salsa piccante e sottaceti."
                ],
                [
                  "nome"=> "BBQ Pulled Pork",
                  "ingredienti"=> ["spalla di maiale", "salsa barbecue", "panini", "insalata di cavolo", "sottaceti"],
                  "descrizione"=> "Il BBQ Pulled Pork è carne di maiale lentamente cotta e sfilacciata, servita in un panino con salsa barbecue, insalata di cavolo e sottaceti."
                ],
                [
                  "nome"=> "Shrimp and Grits",
                  "ingredienti"=> ["gamberi", "grits", "formaggio cheddar", "salsa al limone", "peperoni"],
                  "descrizione"=> "Lo Shrimp and Grits è un piatto del Sud a base di gamberi serviti su polenta di mais cremosa con formaggio cheddar, salsa al limone e peperoni."
                ],
                [
                  "nome"=> "Biscuits and Gravy",
                  "ingredienti"=> ["biscotti", "salsiccia sbriciolata", "salsa bianca", "uova", "pepe nero"],
                  "descrizione"=> "I Biscuits and Gravy sono biscotti sfornati serviti con salsiccia sbriciolata e una ricca salsa bianca, spesso accompagnati da uova e pepe nero."
                ],
                [
                  "nome"=> "New England Clam Bake",
                  "ingredienti"=> ["vongole", "cozze", "gamberi", "mais", "patate"],
                  "descrizione"=> "Il New England Clam Bake è un pasto tradizionale della costa orientale. Vongole, cozze, gamberi, mais e patate cotti insieme in una grande pentola."
                ],
                [
                  "nome"=> "Chicken and Waffles",
                  "ingredienti"=> ["pollo fritto", "waffle", "sciroppo d'acero", "burro", "peperoncino in polvere"],
                  "descrizione"=> "Il Chicken and Waffles è un piatto sorprendente che unisce pollo fritto croccante e waffle soffici, serviti con sciroppo d'acero, burro e una spolverata di peperoncino in polvere."
                ],
                [
                  "nome"=> "Cajun Jambalaya",
                  "ingredienti"=> ["riso", "pollo", "salsiccia andouille", "gamberi", "peperoni"],
                  "descrizione"=> "Il Cajun Jambalaya è una variante piccante del Jambalaya con riso, pollo, salsiccia andouille, gamberi e peperoni, tipica della Louisiana."
                ],
                [
                  "nome"=> "Buffalo Wings",
                  "ingredienti"=> ["ali di pollo", "salsa piccante", "burro", "sedano", "salsa al formaggio blu"],
                  "descrizione"=> "Le Buffalo Wings sono ali di pollo croccanti ricoperte di salsa piccante al burro, spesso servite con sedano e salsa al formaggio blu."
                ],
                [
                  "nome"=> "Frito Pie",
                  "ingredienti"=> ["fritos", "carne macinata", "fagioli", "formaggio", "cipolla"],
                  "descrizione"=> "Il Frito Pie è una delizia tex-mex. Fritos croccanti sono coperti con carne macinata, fagioli, formaggio e cipolla."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Apple Pie",
                  "ingredienti"=> ["mele", "zucchero", "cannella", "crosta di pasta", "gelato alla vaniglia"],
                  "descrizione"=> "La Apple Pie è la torta di mele americana per eccellenza. Mele dolci e speziate cotte in una crosta di pasta e spesso servite con gelato alla vaniglia."
                ],
                [
                  "nome"=> "Chocolate Chip Cookies",
                  "ingredienti"=> ["cioccolato", "burro", "zucchero", "uova", "farina"],
                  "descrizione"=> "I Chocolate Chip Cookies sono biscotti al cioccolato morbidi e deliziosi. Perfetti da gustare con un bicchiere di latte."
                ],
                [
                  "nome"=> "Cheesecake",
                  "ingredienti"=> ["biscotti Graham cracker", "crema di formaggio", "zucchero", "uova", "vaniglia"],
                  "descrizione"=> "La Cheesecake è una torta al formaggio americana. Preparata con una base di biscotti Graham cracker e una cremosa miscela di formaggio, è spesso arricchita con topping di frutta o cioccolato."
                ],
                [
                  "nome"=> "Pecan Pie",
                  "ingredienti"=> ["noci pecan", "zucchero", "sciroppo di mais", "uova", "vaniglia"],
                  "descrizione"=> "La Pecan Pie è una torta ricca di noci pecan caramellate in uno strato di sciroppo di mais dolce. Un classico dessert del Sud."
                ],
                [
                  "nome"=> "Banana Split",
                  "ingredienti"=> ["banane", "gelato alla vaniglia", "cioccolato caldo", "palline di gelato", "palline di frutta"],
                  "descrizione"=> "Il Banana Split è un dessert divertente. Banane divise a metà, servite con palline di gelato alla vaniglia, cioccolato caldo, panna montata e palline di frutta."
                ]
              ]],

              "Indiano"=>["primi"=> [
                [
                  "nome"=> "Biryani",
                  "ingredienti"=> ["riso basmati", "pollo", "spezie aromatiche", "cipolla", "yogurt"],
                  "descrizione"=> "Il Biryani è un piatto di riso aromatico dell'India. Preparato con riso basmati cotto con pollo e una miscela di spezie, cipolla e yogurt per un sapore ricco e fragrante."
                ],
                [
                  "nome"=> "Dal Makhani",
                  "ingredienti"=> ["lenticchie urad", "lenticchie rosse", "pomodori", "spezie", "burro"],
                  "descrizione"=> "Il Dal Makhani è una zuppa di lenticchie cremosa e ricca. Lenticchie urad e rosse cotte con pomodori, spezie e burro per una consistenza vellutata."
                ],
                [
                  "nome"=> "Paneer Tikka",
                  "ingredienti"=> ["paneer", "yogurt", "spezie tandoori", "peperoni", "cipolla"],
                  "descrizione"=> "Il Paneer Tikka è un antipasto indiano. Cubetti di paneer (formaggio fresco) marinati in yogurt e spezie tandoori, quindi grigliati con peperoni e cipolla."
                ],
                [
                  "nome"=> "Aloo Gobi",
                  "ingredienti"=> ["patate", "cavolfiore", "spezie", "pomodori", "cipolla"],
                  "descrizione"=> "L'Aloo Gobi è un piatto vegetariano. Patate e cavolfiore cotti con una miscela di spezie, pomodori e cipolla per un sapore deliziosamente piccante."
                ],
                [
                  "nome"=> "Risotto al Curry",
                  "ingredienti"=> ["riso basmati", "curry in polvere", "verdure", "cipolla", "burro"],
                  "descrizione"=> "Il Risotto al Curry è un'interpretazione indiana del classico risotto italiano. Preparato con riso basmati, curry in polvere, verdure, cipolla e burro."
                ],
                [
                  "nome"=> "Dosa",
                  "ingredienti"=> ["farina di riso", "farina di lenticchie", "spezie", "patate", "chutney di cocco"],
                  "descrizione"=> "Il Dosa è un sottile pancake di riso e lenticchie. Spesso servito con un ripieno di patate e accompagnato da chutney di cocco e salse."
                ],
                [
                  "nome"=> "Murg Malaiwala",
                  "ingredienti"=> ["pollo", "panna", "spezie aromatiche", "mandorle", "yogurt"],
                  "descrizione"=> "Il Murg Malaiwala è un piatto di pollo cremoso. Il pollo è cotto in una salsa di panna, spezie aromatiche e mandorle per un sapore lussurioso."
                ],
                [
                  "nome"=> "Tandoori Salmon",
                  "ingredienti"=> ["salmone", "spezie tandoori", "yogurt", "limone", "coriandolo"],
                  "descrizione"=> "Il Tandoori Salmon è un piatto di salmone marinato in una miscela di spezie tandoori e yogurt, quindi cotto in un forno tandoor o al grill."
                ],
                [
                  "nome"=> "Butter Chicken",
                  "ingredienti"=> ["pollo", "salsa al burro", "spezie", "pomodori", "crema"],
                  "descrizione"=> "Il Butter Chicken è un classico della cucina indiana. Pollo cotto in una salsa al burro con spezie, pomodori e crema per un sapore indulgente."
                ],
                [
                  "nome"=> "Vegetable Biryani",
                  "ingredienti"=> ["riso basmati", "verdure miste", "spezie aromatiche", "cipolla", "yogurt"],
                  "descrizione"=> "Il Vegetable Biryani è una versione vegetariana del Biryani. Risosal più aromaingredie y verdure miste cotte con spezie, cipolla e yogurt per un piatto ricco di sapori."
                ]
              ],
              "secondi"=> [
                [
                  "nome"=> "Chicken Tikka Masala",
                  "ingredienti"=> ["pollo alla griglia", "salsa cremosa al pomodoro", "spezie", "cipolla", "coriandolo"],
                  "descrizione"=> "Il Chicken Tikka Masala è un piatto popolare. Pollo alla griglia servito in una salsa cremosa al pomodoro con spezie, cipolla e coriandolo."
                ],
                [
                  "nome"=> "Palak Paneer",
                  "ingredienti"=> ["paneer", "salsa di spinaci", "spezie", "cipolla", "crema"],
                  "descrizione"=> "Il Palak Paneer è un piatto vegetariano. Cubetti di paneer in una salsa cremosa di spinaci con spezie, cipolla e crema."
                ],
                [
                  "nome"=> "Rogan Josh",
                  "ingredienti"=> ["agnello", "salsa di pomodoro", "spezie aromatiche", "cipolla", "yogurt"],
                  "descrizione"=> "Il Rogan Josh è un curry di agnello ricco e speziato. Agnello cotto in una salsa di pomodoro con spezie aromatiche, cipolla e yogurt."
                ],
                [
                  "nome"=> "Chana Masala",
                  "ingredienti"=> ["ceci", "salsa di pomodoro", "spezie", "cipolla", "coriandolo"],
                  "descrizione"=> "Il Chana Masala è un piatto vegetariano. Ceci cotti in una salsa di pomodoro con spezie, cipolla e coriandolo per un sapore saporito."
                ],
                [
                  "nome"=> "Tandoori Chicken",
                  "ingredienti"=> ["pollo marinato", "spezie tandoori", "yogurt", "limone", "coriandolo"],
                  "descrizione"=> "Il Tandoori Chicken è un piatto di pollo marinato in una miscela di spezie tandoori e yogurt, quindi cotto in un forno tandoor o al grill."
                ],
                [
                  "nome"=> "Fish Curry",
                  "ingredienti"=> ["pesce", "salsa di curry", "spezie", "cipolla", "pomodori"],
                  "descrizione"=> "Il Fish Curry è un piatto di pesce speziato. Pesce cotto in una salsa di curry con spezie, cipolla e pomodori per un sapore intenso."
                ],
                [
                  "nome"=> "Beef Vindaloo",
                  "ingredienti"=> ["manzo", "salsa Vindaloo", "spezie", "cipolla", "aglio"],
                  "descrizione"=> "Il Beef Vindaloo è un piatto piccante. Manzo cotto in una salsa Vindaloo con spezie, cipolla e aglio per un sapore audace."
                ],
                [
                  "nome"=> "Mutton Korma",
                  "ingredienti"=> ["carne di agnello", "salsa Korma", "spezie", "cipolla", "mandorle"],
                  "descrizione"=> "Il Mutton Korma è un piatto di carne di agnello cremoso. Agnello cotto in una salsa Korma con spezie, cipolla e mandorle per un sapore ricco."
                ],
                [
                  "nome"=> "Paneer Butter Masala",
                  "ingredienti"=> ["paneer", "salsa al burro", "spezie", "cipolla", "pomodori"],
                  "descrizione"=> "Il Paneer Butter Masala è un piatto vegetariano. Cubetti di paneer in una salsa al burro con spezie, cipolla e pomodori."
                ],
                [
                  "nome"=> "Egg Curry",
                  "ingredienti"=> ["uova sode", "salsa di curry", "spezie", "cipolla", "coriandolo"],
                  "descrizione"=> "L'Egg Curry è un piatto a base di uova sode in una salsa di curry con spezie, cipolla e coriandolo."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Gulab Jamun",
                  "ingredienti"=> ["latte in polvere", "farina di semola", "zucchero", "cardamomo", "sciroppo di zucchero"],
                  "descrizione"=> "Il Gulab Jamun è un dessert indiano. Piccole palle dolci a base di latte in polvere e farina di semola, inzuppate in uno sciroppo zuccherato profumato al cardamomo."
                ],
                [
                  "nome"=> "Jalebi",
                  "ingredienti"=> ["farina di farina di semola", "zucchero", "zafferano", "acqua di rosa", "olio per friggere"],
                  "descrizione"=> "Il Jalebi è un dessert indiano molto dolce. Spirali di pastella fritte in olio e inzuppate in uno sciroppo di zucchero profumato al cardamomo e zafferano."
                ],
                [
                  "nome"=> "Kheer",
                  "ingredienti"=> ["riso", "latte", "zucchero", "frutta secca", "cardamomo"],
                  "descrizione"=> "Il Kheer è un pudding di riso indiano. Risoprigorosoai alla cannella coan latte, zucchero, frutta secca e cardamomo."
                ],
                [
                  "nome"=> "Rasgulla",
                  "ingredienti"=> ["latte", "zucchero", "acqua di rosa", "cardamomo", "zafferano"],
                  "descrizione"=> "Il Rasgulla è un dolce indiano a base di latte. Palline morbide fatte di latte cotto in uno sciroppo di zucchero profumato all'acqua di rosa e cardamomo."
                ],
                [
                  "nome"=> "Gajar Halwa",
                  "ingredienti"=> ["carote", "latte", "zucchero", "frutta secca", "cardamomo"],
                  "descrizione"=> "Il Gajar Halwa è un dessert a base di carote. Carote grattugiate cotte con latte, zucchero, frutta secca e cardamomo per un dolce nutriente."
                ]
              ]],

            

              "Mediterraneo"=>["primi"=> [
                [
                  "nome"=> "Pasta alla puttanesca",
                  "ingredienti"=> ["pasta", "pomodori", "acciughe", "olive nere", "capperi"],
                  "descrizione"=> "La pasta alla puttanesca è un piatto italiano con una salsa saporita fatta con pomodori, acciughe, olive nere e capperi, servita su pasta al dente."
                ],
                [
                  "nome"=> "Risotto allo zafferano",
                  "ingredienti"=> ["riso", "zafferano", "brodo", "cipolla", "vino bianco"],
                  "descrizione"=> "Il risotto allo zafferano è una prelibatezza italiana con riso cotto in brodo profumato allo zafferano, arricchito con cipolla, vino bianco e formaggio parmigiano."
                ],
                [
                  "nome"=> "Insalata greca",
                  "ingredienti"=> ["pomodori", "cetrioli", "olive kalamata", "cipolla rossa", "feta"],
                  "descrizione"=> "L'insalata greca è un'insalata fresca con pomodori, cetrioli, olive kalamata, cipolla rossa e formaggio feta, condita con olio d'oliva e origano."
                ],
                [
                  "nome"=> "Linguine alle vongole",
                  "ingredienti"=> ["linguine", "vongole", "aglio", "prezzemolo", "vino bianco"],
                  "descrizione"=> "Le linguine alle vongole sono una specialità italiana con pasta, vongole, aglio, prezzemolo e vino bianco, creando un piatto di mare irresistibile."
                ],
                [
                  "nome"=> "Tabbouleh",
                  "ingredienti"=> ["couscous", "prezzemolo", "pomodori", "cetrioli", "menta"],
                  "descrizione"=> "Il tabbouleh è un'insalata mediterranea a base di couscous, prezzemolo, pomodori, cetrioli e menta, condita con olio d'oliva e limone."
                ],
                [
                  "nome"=> "Paelle",
                  "ingredienti"=> ["riso", "pollo", "gamberi", "pomodori", "zafferano"],
                  "descrizione"=> "La paella è un piatto spagnolo con riso, pollo, gamberi, pomodori e zafferano, cucinato in una padella ampia per ottenere una crosticina croccante in fondo."
                ],
                [
                  "nome"=> "Moussaka",
                  "ingredienti"=> ["melanzane", "carne macinata", "patate", "salsa bechamel", "cannella"],
                  "descrizione"=> "La moussaka è un piatto greco a strati con melanzane, carne macinata, patate e una salsa bechamel aromatizzata con cannella."
                ],
                [
                  "nome"=> "Couscous con agnello",
                  "ingredienti"=> ["couscous", "agnello", "verdure", "spezie", "uva passa"],
                  "descrizione"=> "Il couscous con agnello è un piatto nordafricano con couscous, agnello, verdure, spezie e uva passa, offrendo un mix di sapori dolci e salati."
                ],
                [
                  "nome"=> "Calamari alla griglia",
                  "ingredienti"=> ["calamari", "aglio", "limone", "prezzemolo", "olio d'oliva"],
                  "descrizione"=> "I calamari alla griglia sono un piatto mediterraneo semplice ma delizioso, preparati con calamari teneri marinati in aglio, limone e prezzemolo, quindi grigliati."
                ],
                [
                  "nome"=> "Gazpacho",
                  "ingredienti"=> ["pomodori", "peperoni", "cipolla", "aglio", "aceto di sherry"],
                  "descrizione"=> "Il gazpacho è una zuppa fredda spagnola con pomodori, peperoni, cipolla, aglio e aceto di sherry, perfetta per l'estate."
                ]
              ],
              "secondi"=> [
                [
                  "nome"=> "Bistecca alla fiorentina",
                  "ingredienti"=> ["bistecca di manzo", "sale marino", "pepe nero"],
                  "descrizione"=> "La bistecca alla fiorentina è un'icona della cucina toscana, preparata con una succulenta bistecca di manzo grigliata e condita con sale marino e pepe nero."
                ],
                [
                  "nome"=> "Pesce spada alla siciliana",
                  "ingredienti"=> ["pesce spada", "pomodori", "olive", "cipolla", "aglio"],
                  "descrizione"=> "Il pesce spada alla siciliana è un piatto siciliano con pesce spada, pomodori, olive, cipolla e aglio, cotto in un sugo ricco di sapori mediterranei."
                ],
                [
                  "nome"=> "Pollo alla provenzale",
                  "ingredienti"=> ["petto di pollo", "erbe aromatiche", "aglio", "vino bianco", "limone"],
                  "descrizione"=> "Il pollo alla provenzale è una specialità provenzale con petto di pollo cotto con erbe aromatiche, aglio, vino bianco e succo di limone."
                ],
                [
                  "nome"=> "Zuppa di pesce",
                  "ingredienti"=> ["pesce misto", "pomodori", "cipolla", "aglio", "zafferano"],
                  "descrizione"=> "La zuppa di pesce mediterranea è un piatto di pesce misto con pomodori, cipolla, aglio e zafferano, servito con crostini di pane."
                ],
                [
                  "nome"=> "Keftedes",
                  "ingredienti"=> ["polpette di carne", "cipolla", "erbe aromatiche", "pane grattugiato", "uovo"],
                  "descrizione"=> "Le keftedes sono polpette di carne greche con carne macinata, cipolla, erbe aromatiche, pane grattugiato e uovo, servite con salsa tzatziki."
                ],
                [
                  "nome"=> "Tagine di agnello",
                  "ingredienti"=> ["agnello", "prugne secche", "mandorle", "spezie", "couscous"],
                  "descrizione"=> "Il tagine di agnello è un piatto del Nord Africa con agnello, prugne secche, mandorle e spezie, solitamente servito con couscous."
                ],
                [
                  "nome"=> "Pescato del giorno alla griglia",
                  "ingredienti"=> ["pesce fresco del giorno", "erbe aromatiche", "limone", "olio d'oliva"],
                  "descrizione"=> "Il pescato del giorno alla griglia è una scelta fresca e saporita, con pesce fresco cucinato alla griglia con erbe aromatiche, limone e olio d'oliva."
                ],
                [
                  "nome"=> "Tzatziki",
                  "ingredienti"=> ["yogurt greco", "cetriolo", "aglio", "menta", "olio d'oliva"],
                  "descrizione"=> "Il tzatziki è una salsa greca rinfrescante fatta con yogurt greco, cetriolo, aglio, menta e olio d'oliva, perfetta per accompagnare carne e pane pita."
                ],
                [
                  "nome"=> "Couscous con verdure grigliate",
                  "ingredienti"=> ["couscous", "peperoni", "zucchine", "melanzane", "olio d'oliva"],
                  "descrizione"=> "Il couscous con verdure grigliate è un piatto leggero con couscous servito con peperoni, zucchine e melanzane grigliate, condito con olio d'oliva."
                ],
                [
                  "nome"=> "Sarde a beccafico",
                  "ingredienti"=> ["sarde", "migliaccio", "uva passa", "pinoli", "pangrattato"],
                  "descrizione"=> "Le sarde a beccafico sono un piatto siciliano con sarde farcite con un ripieno a base di migliaccio (miglio), uva passa, pinoli e pangrattato, quindi arrotolate e cotte al forno."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Cannoli siciliani",
                  "ingredienti"=> ["cannoli", "ricotta", "zucchero a velo", "cioccolato", "canditi"],
                  "descrizione"=> "I cannoli siciliani sono dolci tradizionali con gusci croccanti riempiti di una deliziosa crema di ricotta dolcificata e arricchita con cioccolato e canditi."
                ],
                [
                  "nome"=> "Torta caprese",
                  "ingredienti"=> ["mandorle", "cioccolato fondente", "burro", "uova", "zucchero"],
                  "descrizione"=> "La torta caprese è una torta senza farina a base di mandorle e cioccolato fondente, ottenendo una consistenza densa e ricca di cioccolato."
                ],
                [
                  "nome"=> "Baklava",
                  "ingredienti"=> ["noci", "mandorle", "fogli di pasta fillo", "zucchero", "miele"],
                  "descrizione"=> "La baklava è un dolce greco con strati di noci e mandorle tra fogli sottili di pasta fillo, conditi con uno sciroppo dolce al miele."
                ],
                [
                  "nome"=> "Tiramisù",
                  "ingredienti"=> ["mascarpone", "savoiardi", "caffè", "cacao in polvere"],
                  "descrizione"=> "Il tiramisù è un dolce italiano amato in tutto il mondo. Questo dessert irresistibile si compone di strati di biscotti savoiardi inzuppati nel caffè, alternati con un cremoso mix di mascarpone, uova e zucchero, il tutto spolverato con cacao in polvere."
                ],
                [
                  "nome"=> "Baklava al pistacchio",
                  "ingredienti"=> ["pistacchi", "fogli di pasta fillo", "zucchero", "miele", "burro"],
                  "descrizione"=> "La baklava al pistacchio è una variante della baklava greca con uno strato di pistacchi tra i fogli di pasta fillo, conditi con uno sciroppo dolce al miele."
                ]
              ]],

              "Mediorientale"=>["primi"=> [
                [
                  "nome"=> "Hummus",
                  "ingredienti"=> ["ceci", "tahini", "aglio", "limone", "olio d'oliva"],
                  "descrizione"=> "L'hummus è una crema di ceci, tahini, aglio, limone e olio d'oliva, spesso servita come antipasto con pane pita o verdure."
                ],
                [
                  "nome"=> "Falafel",
                  "ingredienti"=> ["ceci", "prezzemolo", "cipolla", "spezie", "tahini"],
                  "descrizione"=> "I falafel sono polpette fritte di ceci condite con prezzemolo, cipolla e spezie, spesso servite in panini o con salsa tahini."
                ],
                [
                  "nome"=> "Tabbouleh",
                  "ingredienti"=> ["couscous", "prezzemolo", "pomodori", "cetrioli", "menta"],
                  "descrizione"=> "Il tabbouleh è un'insalata mediterranea a base di couscous, prezzemolo, pomodori, cetrioli e menta, condita con olio d'oliva e limone."
                ],
                [
                  "nome"=> "Baba Ghanoush",
                  "ingredienti"=> ["melanzane", "tahini", "aglio", "limone", "olio d'oliva"],
                  "descrizione"=> "Il baba ghanoush è una crema di melanzane affumicate, tahini, aglio, limone e olio d'oliva, servita con pane pita o verdure."
                ],
                [
                  "nome"=> "Dolma",
                  "ingredienti"=> ["foglie di vite", "riso", "carne macinata", "spezie", "limone"],
                  "descrizione"=> "I dolma sono involtini di foglie di vite ripieni di riso, carne macinata e spezie, cotti con succo di limone."
                ],
                [
                  "nome"=> "Kibbeh",
                  "ingredienti"=> ["carne di manzo", "bulgur", "cipolla", "spezie", "pignole"],
                  "descrizione"=> "Il kibbeh è un piatto a base di carne di manzo macinata, bulgur, cipolla, spezie e pignole, spesso preparato in forma di palline o torte e fritto o cotto al forno."
                ],
                [
                  "nome"=> "Shawarma",
                  "ingredienti"=> ["carne di agnello", "pollo", "manzo", "spezie", "pane pita"],
                  "descrizione"=> "Lo shawarma è un piatto di carne arrosto (agnello, pollo o manzo) condito con spezie e spesso servito in un panino pita con salse e verdure."
                ],
                [
                  "nome"=> "Mansaf",
                  "ingredienti"=> ["agnello", "riso", "yogurt", "pane arabo", "noci"],
                  "descrizione"=> "Il mansaf è un piatto nazionale della Giordania, con agnello cotto lentamente in una salsa di yogurt, servito con riso e pane arabo, spesso guarnito con noci."
                ],
                [
                  "nome"=> "Musakhan",
                  "ingredienti"=> ["pollo", "cipolla", "sumac", "pane arabo", "noci"],
                  "descrizione"=> "Il musakhan è un piatto palestinese con pollo, cipolla e sumac cotti su pane arabo, spesso guarnito con noci tostate."
                ],
                [
                  "nome"=> "Makloubeh",
                  "ingredienti"=> ["pollo", "melanzane", "riso", "spezie", "mandorle"],
                  "descrizione"=> "Il makloubeh è un piatto tradizionale della cucina araba con pollo, melanzane, riso e spezie, rovesciato al momento di servire per creare un aspetto stratificato."
                ]
              ],
              "secondi"=> [
                [
                  "nome"=> "Kebab",
                  "ingredienti"=> ["carne di agnello", "manzo", "pollo", "verdure", "spezie"],
                  "descrizione"=> "I kebab sono spiedini di carne di agnello, manzo o pollo, marinati in spezie e grigliati, spesso serviti con verdure e pane pita."
                ],
                [
                  "nome"=> "Mandi",
                  "ingredienti"=> ["agnello", "riso", "spezie", "mandorle", "uvetta"],
                  "descrizione"=> "Il mandi è un piatto saudita con agnello cotto lentamente con riso e spezie, spesso guarnito con mandorle tostate e uvetta."
                ],
                [
                  "nome"=> "Magluba",
                  "ingredienti"=> ["pollo", "melanzane", "riso", "spezie", "mandorle"],
                  "descrizione"=> "Il magluba è un piatto tradizionale del Levante con pollo, melanzane, riso e spezie, rovesciato al momento di servire per creare un aspetto stratificato."
                ],
                [
                  "nome"=> "Harira",
                  "ingredienti"=> ["ceci", "lenticchie", "carne di agnello", "pomodori", "spezie"],
                  "descrizione"=> "L'harira è una zuppa marocchina ricca con ceci, lenticchie, carne di agnello, pomodori e spezie, spesso consumata durante il Ramadan."
                ],
                [
                  "nome"=> "Maqluba",
                  "ingredienti"=> ["pollo", "melanzane", "riso", "spezie", "mandorle"],
                  "descrizione"=> "Il maqluba è un piatto tradizionale della cucina palestinese con pollo, melanzane, riso e spezie, rovesciato al momento di servire per creare un aspetto stratificato."
                ],
                [
                  "nome"=> "Kebsa",
                  "ingredienti"=> ["pollo", "riso", "spezie", "pomodori", "mandorle"],
                  "descrizione"=> "La kebsa è un piatto saudita a base di pollo, riso, spezie, pomodori e mandorle, spesso servito in occasioni speciali."
                ],
                [
                  "nome"=> "Dijaj Mekhwali",
                  "ingredienti"=> ["pollo", "cipolla", "spezie", "mandorle", "uvetta"],
                  "descrizione"=> "Il dijaj mekhwali è un piatto libanese con pollo, cipolla, spezie, mandorle e uvetta, spesso servito con riso o couscous."
                ],
                [
                  "nome"=> "Merguez",
                  "ingredienti"=> ["salsiccia di agnello", "spezie", "pane baguette", "salsa harissa"],
                  "descrizione"=> "Le merguez sono salsicce piccanti di agnello con spezie, spesso grigliate e servite in un pane baguette con salsa harissa."
                ],
                [
                  "nome"=> "Kushari",
                  "ingredienti"=> ["lenticchie", "riso", "pasta", "salsa di pomodoro", "cipolla fritta"],
                  "descrizione"=> "Il kushari è un piatto egiziano con lenticchie, riso, pasta, salsa di pomodoro e cipolla fritta, spesso arricchito con una salsa piccante."
                ],
                [
                  "nome"=> "Shish Taouk",
                  "ingredienti"=> ["pollo", "yogurt", "aglio", "spezie", "pane pita"],
                  "descrizione"=> "Lo shish taouk è un piatto di spiedini di pollo marinati in yogurt, aglio e spezie, spesso serviti con pane pita e tahini."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Baklava",
                  "ingredienti"=> ["noci", "mandorle", "fogli di pasta fillo", "zucchero", "miele"],
                  "descrizione"=> "La baklava è un dolce mediorientale con strati di noci e mandorle tra fogli sottili di pasta fillo, conditi con uno sciroppo dolce al miele."
                ],
                [
                  "nome"=> "Knafeh",
                  "ingredienti"=> ["semolino", "ricotta", "zucchero", "acqua di fiori d'arancio", "pistacchi"],
                  "descrizione"=> "Il knafeh è un dessert arabo con semolino, ricotta, zucchero e acqua di fiori d'arancio, spesso decorato con pistacchi."
                ],
                [
                  "nome"=> "Atayef",
                  "ingredienti"=> ["pancake ripieni", "ricotta", "noci", "zucchero", "cannella"],
                  "descrizione"=> "Gli atayef sono pancake ripieni di ricotta, noci, zucchero e cannella, spesso serviti come dessert nei paesi arabi."
                ],
                [
                  "nome"=> "Basbousa",
                  "ingredienti"=> ["semolino", "zucchero", "yogurt", "cocco", "sciroppo di zucchero"],
                  "descrizione"=> "La basbousa è una torta di semolino inzuppata in uno sciroppo di zucchero, spesso aromatizzata con cocco e mandorle."
                ],
                [
                  "nome"=> "Qatayef",
                  "ingredienti"=> ["pancake ripieni", "noci", "zucchero", "cannella", "sciroppo di zucchero"],
                  "descrizione"=> "I qatayef sono pancake ripieni di noci, zucchero, cannella e inzuppati in uno sciroppo dolce, spesso serviti durante il mese di Ramadan."
                ]
              ]],

              "Vietnamita" => [ "primi"=> [
                
                [
                  "nome"=> "Pho",
                  "ingredienti"=> ["noodle di riso", "manzo", "brodo di carne", "erbe fresche", "lime"],
                  "descrizione"=> "Il Pho è una zuppa di noodle di riso con fette di manzo o pollo, servita in un brodo aromatico e guarnita con erbe fresche e lime."
                ],
                [
                  "nome"=> "Bun Cha",
                  "ingredienti"=> ["carne di maiale marinata", "noodle di riso", "salsa di pesce", "erbe aromatiche"],
                  "descrizione"=> "Il Bun Cha è un piatto con carne di maiale marinata e arrostita, servita con noodle di riso, salsa di pesce e erbe aromatiche."
                ],
                [
                  "nome"=> "Goi Cuon",
                  "ingredienti"=> ["gamberi", "maiale", "vermicelli di riso", "erbe fresche", "salsa di arachidi"],
                  "descrizione"=> "Il Goi Cuon sono involtini primavera freschi con gamberi, maiale, vermicelli di riso, erbe fresche e una salsa di arachidi."
                ],
                [
                  "nome"=> "Cao Lau",
                  "ingredienti"=> ["tagliatelle di Cao Lau", "maiale alla griglia", "erbe aromatiche", "crocchette di riso croccante"],
                  "descrizione"=> "Il Cao Lau è un piatto di tagliatelle Cao Lau con maiale alla griglia, erbe aromatiche e croccanti crocchette di riso."
                ],
                [
                  "nome"=> "Banh Mi",
                  "ingredienti"=> ["pane baguette", "carne di maiale", "salsa piccante", "verdure in salamoia"],
                  "descrizione"=> "Il Banh Mi è un sandwich vietnamita con pane baguette, carne di maiale, salsa piccante e verdure in salamoia."
                ],
                [
                  "nome"=> "Mi Quang",
                  "ingredienti"=> ["tagliatelle di Mi Quang", "gamberi", "pollo", "arachidi", "cracker di riso"],
                  "descrizione"=> "Il Mi Quang è un piatto con tagliatelle di Mi Quang, gamberi, pollo, arachidi e croccanti cracker di riso, servito con brodo."
                ],
                [
                  "nome"=> "Hu Tieu",
                  "ingredienti"=> ["noodle di riso", "maiale", "gamberi", "brodo di carne", "erbe fresche"],
                  "descrizione"=> "L'hu tieu è una zuppa di noodle di riso con maiale, gamberi, brodo di carne e erbe fresche."
                ],
                [
                  "nome"=> "Bun Bo Hue",
                  "ingredienti"=> ["noodle di riso", "carne di manzo", "brodo speziato", "erbe fresche", "lime"],
                  "descrizione"=> "Il Bun Bo Hue è una zuppa piccante di noodle di riso con carne di manzo, servita con un brodo speziato, erbe fresche e lime."
                ],
                [
                  "nome"=> "Banh Xeo",
                  "ingredienti"=> ["crepes di riso croccante", "gamberi", "maiale", "germogli di soia", "salsa di pesce"],
                  "descrizione"=> "Il Banh Xeo sono crepes di riso croccante ripiene di gamberi, maiale, germogli di soia e servite con salsa di pesce."
                ],
                [
                  "nome"=> "Com Tam",
                  "ingredienti"=> ["riso spezzato", "maiale alla griglia", "uovo fritto", "salsa di pesce", "insalata di verdure"],
                  "descrizione"=> "Il Com Tam è un piatto di riso spezzato con maiale alla griglia, uovo fritto, salsa di pesce e insalata di verdure."
                ]],
              "secondi"=> [
                [
                  "nome"=> "Goi Ga",
                  "ingredienti"=> ["pollo grigliato", "insalata di cavolo", "arachidi", "menta", "salsa di pesce"],
                  "descrizione"=> "Il Goi Ga è una insalata di pollo grigliato con cavolo, arachidi, menta e salsa di pesce."
                ],
                [
                  "nome"=> "Bo Luc Lac",
                  "ingredienti"=> ["filetto di manzo saltato", "cipolle", "pomodori", "riso bianco", "salsa di soia"],
                  "descrizione"=> "Il Bo Luc Lac è un piatto con filetto di manzo saltato, cipolle, pomodori e riso bianco, spesso condito con salsa di soia."
                ],
                [
                  "nome"=> "Ca Kho To",
                  "ingredienti"=> ["pesce caramellato in padella", "salsa di pesce", "zucchero di palma", "anice stellato", "riso bianco"],
                  "descrizione"=> "Il Ca Kho To è un piatto di pesce caramellato in padella con salsa di pesce, zucchero di palma, anice stellato e riso bianco."
                ],
                [
                  "nome"=> "Tom Rang Muoi",
                  "ingredienti"=> ["gamberi in salsa di sale", "aglio", "peperoncino", "riso al vapore"],
                  "descrizione"=> "Il Tom Rang Muoi sono gamberi in salsa di sale con aglio e peperoncino, spesso serviti con riso al vapore."
                ],
                [
                  "nome"=> "Canh Chua Ca",
                  "ingredienti"=> ["zuppa di pesce acida", "ananas", "pomodori", "erbe aromatiche", "riso bollito"],
                  "descrizione"=> "Il Canh Chua Ca è una zuppa di pesce acida con ananas, pomodori, erbe aromatiche e riso bollito."
                ],
                [
                  "nome"=> "Bun Thit Nuong",
                  "ingredienti"=> ["vermicelli di riso", "maiale alla griglia", "gamberi", "arachidi", "salsa di pesce"],
                  "descrizione"=> "Il Bun Thit Nuong sono vermicelli di riso con maiale alla griglia, gamberi, arachidi e salsa di pesce."
                ],
                [
                  "nome"=> "Ca Ri Ga",
                  "ingredienti"=> ["pollo al curry", "latte di cocco", "patate", "riso bianco", "pane baguette"],
                  "descrizione"=> "Il Ca Ri Ga è un curry di pollo con latte di cocco, patate, riso bianco e pane baguette."
                ],
                [
                  "nome"=> "Ga Kho Gung",
                  "ingredienti"=> ["pollo in salsa di zenzero", "cipolle", "riso al vapore", "verdure saltate"],
                  "descrizione"=> "Il Ga Kho Gung è un piatto di pollo in salsa di zenzero con cipolle, riso al vapore e verdure saltate."
                ],
                [
                  "nome"=> "Banh Canh Cua",
                  "ingredienti"=> ["noodle di tapioca", "ragù di granchio", "gamberi", "erbe fresche", "lime"],
                  "descrizione"=> "Il Banh Canh Cua sono noodle di tapioca con ragù di granchio, gamberi, erbe fresche e lime."
                ],
                [
                  "nome"=> "Banh Cuon",
                  "ingredienti"=> ["involtini di riso sottili", "maiale macinato", "funghi", "salsa di pesce", "erbe fresche"],
                  "descrizione"=> "Il Banh Cuon sono involtini di riso sottili ripieni di maiale macinato, funghi, salsa di pesce e erbe fresche."
                ]
              ],
              "dolci"=> [
                [
                  "nome"=> "Che Ba Mau",
                  "ingredienti"=> ["dolce a strati", "latte di cocco", "fagioli mungo", "gelatina di agar-agar"],
                  "descrizione"=> "Il Che Ba Mau è un dolce a strati con latte di cocco, fagioli mungo e gelatina di agar-agar."
                ],
                [
                  "nome"=> "Banh Cam",
                  "ingredienti"=> ["palle di riso glutinoso fritte", "ripiene di pasta di fagioli mungo", "zucchero a velo"],
                  "descrizione"=> "Il Banh Cam sono palle di riso glutinoso fritte ripiene di pasta di fagioli mungo e ricoperte di zucchero a velo."
                ],
                [
                  "nome"=> "Sinh To Bo",
                  "ingredienti"=> ["frullato di avocado", "latte condensato", "ghiaccio", "frutta fresca"],
                  "descrizione"=> "Il Sinh To Bo è un frullato di avocado con latte condensato, ghiaccio e frutta fresca."
                ],
                [
                  "nome"=> "Banh Dau Xanh",
                  "ingredienti"=> ["torta di fagioli mungo", "sciroppo di zucchero", "sesamo"],
                  "descrizione"=> "Il Banh Dau Xanh è una torta di fagioli mungo con sciroppo di zucchero e sesamo."
                ],
                [
                  "nome"=> "Kem Flan",
                  "ingredienti"=> ["crema caramellata", "latte condensato", "uova", "vaniglia"],
                  "descrizione"=> "Il Kem Flan è una crema caramellata con latte condensato, uova e vaniglia, spesso servita come dessert."
                ]
            ]]];

                }
}
