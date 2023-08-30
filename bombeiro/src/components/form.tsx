import React, { useState } from 'react';
import { View, Text, StyleSheet, Image, TextInput, TouchableOpacity } from 'react-native';
import { FlexBtn } from "../components/flexBtn";
import { NativeStackScreenProps } from '@react-navigation/native-stack'
import { RootStackParamList } from '../../routes'
import { useNavigation } from '@react-navigation/native';

type RouteProps = NativeStackScreenProps<RootStackParamList>;


// const [email , setEmail] = useState({value:"", error:""})
// const [password , setPassword] = useState({value:"", error:""})

export const Form = () => {
  const navigation = useNavigation()
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  return (
    <View style={Styles.container}>
      <View style={Styles.cube}>
      </View>
      <Image source={require('../../src/assets/images/Rectangle97.png')} style={[Styles.rec, Styles.rec1]} resizeMode='cover' />
      <Image source={require('../../src/assets/images/Rectangle98.png')} style={[Styles.rec, Styles.rec2]} resizeMode='cover' />
      <View style={[Styles.card, Styles.shadowProp]}>
        <View>
          <Text style={Styles.heading}>Email:</Text>
          <TextInput 
              placeholder="Email"
              style={Styles.input}
              value={email}
              onChangeText={(text) => setEmail(text)}
            />
            <Text style={Styles.heading}>Senha:</Text>
            <TextInput
              placeholder="Password"
              style={Styles.input}
              value={password}
              onChangeText={(text) => setPassword(text)}
              secureTextEntry={true}
            />
            <Text style={Styles.forgotPsw}>Esqueceu sua senha?</Text>
        </View>
        <TouchableOpacity onPress={() => navigation.navigate("Plano")}><FlexBtn /></TouchableOpacity>
      </View>
    </View>
  )
}

const Styles = StyleSheet.create({
  container: {
    width: "100%",
    flex: 1,
    position: "relative",
    alignItems: "center",
  },
  heading: {
    fontSize: 18,
    fontWeight: '600',
    marginBottom: 13,
    color: 'rgba(0, 0, 0, 0.6)'
  },
  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    paddingVertical: 45,
    paddingHorizontal: 25,
    width: '70%',
    shadowColor: "rgba(0, 0, 0, 0.25)",
    shadowOffset: {
      width: 4,
      height: 4
    },
    shadowRadius: 10,
    elevation: 10,
    shadowOpacity: 1,
    flex: 1,
    height: 371,
    textAlign: "center",
    alignItems: "center",
    position: "absolute",
    bottom: 175,
  },
  shadowProp: {
    shadowColor: '#171717',
    shadowOffset: { width: 4, height: 4 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },
  cube: {
    position: "absolute",
    bottom: 0,
    backgroundColor: "#fff",
    width: "100%",
    height: 321,
    zIndex: 0,
  },
  rec: {
    flex: 1,
    width: 182,
    height: 72,
    position: "absolute",
    bottom: 319,
    zIndex: -1,
  },
  rec1: {
    right: 0,
  },
  rec2: {
    left: 0,
  },
  input: {
    backgroundColor: "transparent",
    fontSize: 16,
    padding: 10,
    width: 208,
    height: 39,
    color: '#000'
  },
  forgotPsw: {
    fontSize: 12,
    
  }
});
const Colors = StyleSheet.create({
  blue: {
    color: "#33338D"
  }
})
