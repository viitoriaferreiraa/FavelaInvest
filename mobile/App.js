import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import Login from './src/components/Login/';
import Home from './src/components/Home/';
import Sobre from './src/components/Sobre/';

const Stack = createStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
      <Stack.Screen name="Home"  options={{ title: 'Favela Invest', headerStyle: {backgroundColor: "#4153f1" }, headerTitleAlign: "center" , headerTitleStyle:{color: "white"} }} component={Home} />
        <Stack.Screen name="Login" options={{ title: 'Favela Invest', headerStyle: {backgroundColor: "#4153f1"} , headerTitleAlign: "center", headerTitleStyle:{color: "white"} }} component={Login} />        
        <Stack.Screen name="Sobre" options={{ title: 'Sobre nós', headerStyle: {backgroundColor: "#4153f1"} , headerTitleAlign: "center" , headerTitleStyle:{color: "white"} }} component={Sobre} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

