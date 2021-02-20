import React from 'react';
import { View , StatusBar} from 'react-native';
import Styles from './styles';
import { Text, Card, Button, Icon } from 'react-native-elements';
import { SafeAreaProvider } from 'react-native-safe-area-context';

const Home = ({navigation}) => {
    return (
        <SafeAreaProvider>
            <StatusBar hidden />
            <View style={Styles.container}>
            <Card containerStyle={{borderRadius: 50}} >
                <Card.Title h2>Seja bem vindo a Favela Invest</Card.Title>
                <Card.Divider/>
                    <Text h4 style={{margin: 35, textAlign: "center"}}>
                     Da Favela para Favela
                    </Text>
                    <Button
                    icon={<Icon name='login' containerStyle={{marginRight: 5}} size={30} color='#ffffff' />}
                    buttonStyle={{borderRadius: 100, marginLeft: 0, marginRight: 0, marginBottom: 0, margin: 5, backgroundColor: "#4153f1"}}
                    onPress={() => {return navigation.navigate('Login')}}
                    title='Entre' />                
            </Card>
            </View>
        </SafeAreaProvider>       
    );
}

export default Home;