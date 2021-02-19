import React from 'react';
import { View , StatusBar} from 'react-native';
import Styles from './styles';
import { Text, ListItem, Avatar, Button, Icon } from 'react-native-elements';
import { SafeAreaProvider } from 'react-native-safe-area-context';

const Sobre = ({navigation}) => {

    const list = [
        {
          name: '1º Passo - Se cadastrar',
          avatar_url: '../../imagens/values-1.png',
          subtitle: 'Se você tem algum ítem na sua casa que sabe que vai ser bem-vindo para ajudar a alguém, então você se cadastra na plataforma pra encontrar quem precisa dele.'
        },
        {
          name: '2º Passo - Encontrar quem Precisa',
          avatar_url: '../../imagens/values-2.png',
          subtitle: 'Depois de se cadastrar você vê as pessoas que estão aceitando doações, você consegue saber, clicando nos perfis, o que cada um precisa, e assim, espalhar a solidariedade doando de forma consciente.'
        },
        {
            name: '3º Passo - Distribuir Esperança',
            avatar_url: '../../imagens/values-3.png',
            subtitle: 'Assim que encontrar alguém que precisa da sua doação, e clicar para contribuir, ele vai receber uma notificação de que você quer ajuda-lo, e vai ter a oportunidade de também ver seu perfil, após o "MATCH", as informações de contato ficam disponíveis para ambos.'
        }

      ];
    return (
        <SafeAreaProvider>
            <StatusBar hidden />
            <View style={Styles.container}>
               <View style={{width:"90%"}}>
                   <Text h2 style={{textAlign:"center", margin: 30, color: "#4153f1"}}>Como Funciona?</Text>
               {
                    list.map((l, i) => (
                    
                    <ListItem key={i} bottomDivider>
                        <Avatar source={require(`../../imagens/values-1.png`)} />
                        <ListItem.Content>
                        <ListItem.Title>{l.name}</ListItem.Title>
                        <ListItem.Subtitle>{l.subtitle}</ListItem.Subtitle>
                        </ListItem.Content>                        
                    </ListItem>                    
                    ))
                }

                    <Button
                        icon={
                            <Icon
                            name="logout"
                            size={15}
                            color="white"
                            iconStyle={{marginRight: 5}}
                            />
                        }
                        title="Voltar"
                        buttonStyle={{marginTop:30, backgroundColor: "#4153f1"}}
                        onPress={() => {return navigation.popToTop()}}
                    />

               </View>                
            </View>
        </SafeAreaProvider>       
    );
}

export default Sobre;