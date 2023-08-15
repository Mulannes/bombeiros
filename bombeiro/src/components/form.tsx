import { View, Text, StyleSheet } from 'react-native'
import React from 'react'

export const Form = () => {
  return (
    <View style={Styles.container}>
        <View style={[Styles.card, Styles.shadowProp]}>
            <View>
            <Text style={Styles.heading}>
                React Native Box Shadow (Shadow Props)
            </Text>
            </View>
            <Text>
            Using the elevation style prop to apply box-shadow for iOS devices
            </Text>
        </View>
      </View>
  )
}

const Styles = StyleSheet.create({
    container:{

    },
    heading: {
      fontSize: 18,
      fontWeight: '600',
      marginBottom: 13,
    },
    card: {
      backgroundColor: 'white',
      borderRadius: 8,
      paddingVertical: 45,
      paddingHorizontal: 25,
      width: '80%',
      marginVertical: 10,
    },
    shadowProp: {
      shadowColor: '#171717',
      shadowOffset: {width: 4, height: 4},
      shadowOpacity: 0.2,
      shadowRadius: 3,
    },
  });
  