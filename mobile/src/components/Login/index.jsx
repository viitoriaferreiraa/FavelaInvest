import React from 'react';
import { View , StatusBar} from 'react-native';
import Styles from './styles';
import { Text, Input, Button, Icon } from 'react-native-elements';
import { SafeAreaProvider } from 'react-native-safe-area-context';

const Login = ({navigation}) => {
    return (
        <SafeAreaProvider>
            <StatusBar hidden />
            <View style={Styles.container}>
                <View style={{width: "70%",flex: 1, justifyContent: "center", alignItems: "center"}} >
                    <Text h3>Entre ou Cadastre-se</Text>
                    <Input
                        placeholder='Digite seu email'
                        leftIcon={{ type: 'font-awesome', name: 'envelope' , marginTop: 27}}
                        inputStyle={{paddingLeft:7, marginTop: 30}}
                        keyboardType="email-address"
                    />
                    <Input 
                    placeholder="Sua senha" 
                    secureTextEntry={true} 
                    inputStyle={{paddingLeft: 7}}
                    leftIcon={{ type: 'font-awesome', name: 'key'}}
                    keyboardType="numeric"
                    />
                    <Button
                        icon={
                            <Icon
                            name="login"
                            size={15}
                            color="white"
                            iconStyle={{marginRight: 5}}
                            />
                        }
                        title="Entrar"
                        buttonStyle={{backgroundColor: "#4153f1"}}
                        onPress={() => {return navigation.navigate('Sobre')}}
                    />

                    <Button
                        icon={
                            <Icon
                            name="logout"
                            size={15}
                            color="white"
                            iconStyle={{marginRight: 5}}
                            />
                        }
                        title="Cadastre-se"
                        buttonStyle={{marginTop:30, backgroundColor: "#4153f1"}}
                    />
                </View>
            </View>
        </SafeAreaProvider>       
    );
}

export default Login;