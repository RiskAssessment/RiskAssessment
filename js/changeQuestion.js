var maxPerguntas = 6;
                        function aoCarregar(){
                                escondeTudo();
                                document.getElementById('pergunta1').style.display = "block";
                                document.getElementById('perguntaActual').value = 1;
                        }
                        function escondeTudo(){
                                for( i = 1; i <= maxPerguntas; i++){
                                document.getElementById('pergunta'+i).style.display = "none";
                                }
                        }
                        function perguntaAnterior(){
                                actual = document.getElementById('perguntaActual').value;
                                if(actual > 1){
                                        escondeTudo();
                                        document.getElementById('perguntaActual').value--;
                                        document.getElementById('pergunta'+document.getElementById('perguntaActual').value).style.display = "block";
                                }
                        }
                
                        function proximaPergunta(){
                                actual = document.getElementById('perguntaActual').value;
                                if(actual >= 1 && actual < maxPerguntas){
                                        escondeTudo();
                                        document.getElementById('perguntaActual').value++;
                                        document.getElementById('pergunta'+document.getElementById('perguntaActual').value).style.display = "block";
                                }
                        }