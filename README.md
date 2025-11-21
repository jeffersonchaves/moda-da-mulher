Aqui está uma explicação curta e objetiva do que cada classe faz e alguns "gotchas":

position-absolute
Coloca o elemento em posição absoluta em relação ao ancestral posicionado (um pai com position: relative/absolute/fixed). Sem um pai posicionado, fica relativo ao <body>.
top-0 start-100
top-0: posiciona no topo (0).
start-100: desloca a borda “inicial” (esquerda em LTR) 100% além do contêiner. Em conjunto com translate-middle, isso posiciona o badge no canto superior direito externo. "start" respeita direção (LTR/RTL).
translate-middle
Aplica transform: translate(-50%, -50%). Ajusta o badge para que seu centro fique no ponto definido por top/start — usado para centralizar o badge sobre o canto.
badge
Estilo de badge do Bootstrap (tamanho, fonte, padding).
rounded-pill
Borda arredondada tipo pílula (torna o badge circular/oval).
bg-danger
Fundo com a cor de perigo (vermelho).