/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            function adicionar (){
                
                //Eu sei que esse foi bem simples mas é só para usar como exemplo...
                if(document.getElementById("tipo").value ==="")
                    alert("Não digite valores vazios!!!");
                 else{
                
                
                var tipo = document.getElementById("tipo").value;
                var quantidade = document.getElementById("quantidade").value;
                var peso = document.getElementById("peso").value;
                var valor = document.getElementById("valor").value;
                var sku = document.getElementById("sku").value;
                var altura = document.getElementById("altura").value;
                var largura = document.getElementById("largura").value;
                var comprimento = document.getElementById("comprimento").value;             
                
                json = '{\n\
"tipo": "' + tipo + '",\n\
"quantidade": "' + quantidade + '",\n\
"peso": "' + peso + '",\n\
"valor": "' + valor + '",\n\
"sku": "' + sku + '",\n\
"altura": "' + altura + '",\n\
"largura": "' + largura + '",\n\
"comprimento": "' + comprimento + '"\n\
},';

                document.getElementById("items").value+=json;
                
                document.getElementById("tipo").value="";
                document.getElementById("quantidade").value="";
                document.getElementById("peso").value="";
                document.getElementById("valor").value="";
                document.getElementById("sku").value="";
                document.getElementById("altura").value="";
                document.getElementById("largura").value="";
                document.getElementById("comprimento").value="";
            }
            }
        
