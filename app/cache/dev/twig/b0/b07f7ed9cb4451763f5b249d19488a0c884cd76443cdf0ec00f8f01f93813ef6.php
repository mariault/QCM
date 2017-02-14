<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_40cca949dc52c58023a247b06539c46564efa4a5b302325e3a6807a10268b6b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0400dfabdbe15fe61e1c94612e4c66f3f2dcbaae131444de0d984b7e010fde65 = $this->env->getExtension("native_profiler");
        $__internal_0400dfabdbe15fe61e1c94612e4c66f3f2dcbaae131444de0d984b7e010fde65->enter($__internal_0400dfabdbe15fe61e1c94612e4c66f3f2dcbaae131444de0d984b7e010fde65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0400dfabdbe15fe61e1c94612e4c66f3f2dcbaae131444de0d984b7e010fde65->leave($__internal_0400dfabdbe15fe61e1c94612e4c66f3f2dcbaae131444de0d984b7e010fde65_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91315f361664f86e4e45a7f15fe2d44cbf65f37c96b5d5c4d63cb65ab5ba1719 = $this->env->getExtension("native_profiler");
        $__internal_91315f361664f86e4e45a7f15fe2d44cbf65f37c96b5d5c4d63cb65ab5ba1719->enter($__internal_91315f361664f86e4e45a7f15fe2d44cbf65f37c96b5d5c4d63cb65ab5ba1719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_91315f361664f86e4e45a7f15fe2d44cbf65f37c96b5d5c4d63cb65ab5ba1719->leave($__internal_91315f361664f86e4e45a7f15fe2d44cbf65f37c96b5d5c4d63cb65ab5ba1719_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ca2df53848c76aa05b6d19e0e798df0dfb0425e7416712ed46a611111a6350b5 = $this->env->getExtension("native_profiler");
        $__internal_ca2df53848c76aa05b6d19e0e798df0dfb0425e7416712ed46a611111a6350b5->enter($__internal_ca2df53848c76aa05b6d19e0e798df0dfb0425e7416712ed46a611111a6350b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ca2df53848c76aa05b6d19e0e798df0dfb0425e7416712ed46a611111a6350b5->leave($__internal_ca2df53848c76aa05b6d19e0e798df0dfb0425e7416712ed46a611111a6350b5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2724af288e41c0f6ceadf29e56332f58e12a5b55e4a6d6321c340a0b23f194e5 = $this->env->getExtension("native_profiler");
        $__internal_2724af288e41c0f6ceadf29e56332f58e12a5b55e4a6d6321c340a0b23f194e5->enter($__internal_2724af288e41c0f6ceadf29e56332f58e12a5b55e4a6d6321c340a0b23f194e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2724af288e41c0f6ceadf29e56332f58e12a5b55e4a6d6321c340a0b23f194e5->leave($__internal_2724af288e41c0f6ceadf29e56332f58e12a5b55e4a6d6321c340a0b23f194e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
