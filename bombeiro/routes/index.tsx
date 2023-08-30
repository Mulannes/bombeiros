import { createNativeStackNavigator } from "@react-navigation/native-stack";
import Index from "../app/(tabs)";
import Plano from "../app/(tabs)/plano";
import React from 'react'

export type RootStackParamList = {
  index: undefined;
  Plano: undefined;
};

const Stack = createNativeStackNavigator()
export default function Routes() {
    return (
        <Stack.Navigator>
            <Stack.Screen
                name="index"
                component={Index}
                options={{
                    headerShown: false
                }}
            />
            <Stack.Screen
                name="Plano"
                component={Plano}
                options={{
                    headerShown: false
                }}
            />
        </Stack.Navigator>
    )
}