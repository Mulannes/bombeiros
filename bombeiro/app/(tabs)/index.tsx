import { View, Text, StyleSheet, TouchableOpacity } from 'react-native'
import React from 'react'
import { Form } from '../../src/components/form'
import { useNavigation } from '@react-navigation/native'

export default function Index({ navigation }) {
  return (
    <View style={Styles.container}>
      <Form />
      <TouchableOpacity style={Styles.touch} onPress={() => {
        navigation.navigate("plano")
      }}>
        <Text>Clique aqui!</Text>
      </TouchableOpacity>
      <TouchableOpacity style={Styles.touch2} onPress={() => {
        navigation.navigate("teste")
      }}>
        <Text>Clique aqui!</Text>
      </TouchableOpacity>
    </View>
  )
}

const Styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    justifyContent: "center",

  },
  touch: {
    width: 300,
    height: 300,
    backgroundColor: "red",
  },
  touch2: {
    width: 300,
    height: 300,
    backgroundColor: "blue",
  }

})