<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div id="app">
    <v-app>
        <template>
            <v-card
              flat
              tile
            >
              <v-toolbar
                color="cyan"
                dark
              >
                <v-toolbar-side-icon></v-toolbar-side-icon>
          
                <v-toolbar-title>Application</v-toolbar-title>
          
                <v-spacer></v-spacer>
          
                <v-btn icon>
                  <v-icon>search</v-icon>
                </v-btn>
              </v-toolbar>
              <template>
                <v-card>
                  <v-card-title>
                    Nutrition
                    <v-spacer></v-spacer>
                    <v-text-field
                      v-model="search"
                      append-icon="search"
                      label="Search"
                      single-line
                      hide-details
                    ></v-text-field>
                  </v-card-title>
                  <v-data-table
                    :headers="headers"
                    :items="desserts"
                    :search="search"
                  >
                    <template v-slot:items="props">
                      <td>{{ props.item.name }}</td>
                      <td class="text-xs-letf">{{ props.item.depense }}</td>
                      <td class="text-xs-letf">{{ props.item.montant }}</td>
                      <td class="text-xs-letf">{{ props.item.magasin }}</td>
                      <td class="text-xs-letf">{{ props.item.categorie }}</td>
                      <td class="text-xs-left">{{ props.item.date }}</td>
                    </template>
                    <v-alert v-slot:no-results :value="true" color="error" icon="warning">
                      Your search for "{{ search }}" found no results.
                    </v-alert>
                  </v-data-table>
                </v-card>
              </template>
          </template>
    </v-app>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
  <script>
    new Vue({ el: '#app',
     data: () => ({
      types: ['Places to Be', 'Places to See'],
      cards: ['Good', 'Best', 'Finest'],
      socials: [
        {
          icon: 'fab fa-facebook',
          color: 'indigo'
        },
        {
          icon: 'fab fa-linkedin',
          color: 'cyan darken-1'
        },
        {
          icon: 'fab fa-instagram',
          color: 'red lighten-3'
        }
      ],
    
    search: '',
        headers: [
          {
            text: 'PIG : Portefeuille Interactif de Gestion',
            align: 'left',
            sortable: false,
            value: 'name'
          },
          { text: 'Dépense', value: 'depense' },
          { text: 'Montant (€)', value: 'montant' },
          { text: 'Magasin', value: 'magasin' },
          { text: 'Categorie', value: 'categorie' },
          { text: 'Date', value: 'date' }
        ],
        desserts: [
          {
            depense: 'Plein de course',
            montant: 159,
            magasin: 'Auchan',
            categorie: 'Course',
            date: "12 avril 2019"
      
          },
          {
            depense: 'Cadeau Flore',
            montant: 100,
            magasin: 'Courir',
            categorie: 'Cadeau',
            date: "9 avril 2019"
          },
          {
            depense: 'Epilation sourcils',
            montant: 8,
            magasin: 'Yves Rocher',
            categorie: 'Beauté',
            date: "8 avril 2019"
          },
          {
            depense: 'Plein de course',
            montant: 70,
            magasin: 'Carrefour Market',
            categorie: 'Course',
            date: "7 avril 2019"
          },
          {
            depense: 'Loyer',
            montant: 342,
            magasin: 'Square Habitat',
            categorie: 'Loyer',
            date: "4 avril 2019"
          },
          {
            depense: 'Facture eau',
            montant: 15,
            magasin: 'Eau Valencienne',
            categorie: 'Charge',
            date: "5 avril 2019"
          },
          {
            depense: 'TV internet',
            montant: 24.9,
            magasin: 'Sosh',
            categorie: 'Maison',
            date: "5 avril 2019"
          },
        ]}),

    methods: {
      getImage () {
        const min = 550
        const max = 560

        return Math.floor(Math.random() * (max - min + 1)) + min
      }
    } })
   
  </script>
</body>
</html>
