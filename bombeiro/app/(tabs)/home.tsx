import { View, Text, TouchableOpacity, StyleSheet } from 'react-native'
import React from 'react'
import { useNavigation } from '@react-navigation/native'

export default function Plano() {
    const navigation = useNavigation()
  return (
    <View style={Styles.container}>
      <TouchableOpacity style={Styles.touch} onPress={()=>{
        navigation.goBack()
      }}>
        <Text>Clique aqui!</Text>
      </TouchableOpacity>
    </View>
  )
}

const Styles = StyleSheet.create({
    container:{
        flex: 1,
        alignItems: "center",
        justifyContent: "center",
        
    },
    touch:{
        position: "absolute",
        bottom: 0,
        width: 40,
        height: 40,
        backgroundColor: "red"
    }
    
})