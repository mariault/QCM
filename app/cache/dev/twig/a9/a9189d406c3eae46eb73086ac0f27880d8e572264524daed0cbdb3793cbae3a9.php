<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_a4dbea8bc524a9ce5c345ca6455ff3fa6abdbde0c8936caf970c898a20bb1485 extends Twig_Template
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
        $__internal_2778c4a6fc37bc91f67d7579a1d7dfc290dd3d9a69ff041fb8783c68f5452b50 = $this->env->getExtension("native_profiler");
        $__internal_2778c4a6fc37bc91f67d7579a1d7dfc290dd3d9a69ff041fb8783c68f5452b50->enter($__internal_2778c4a6fc37bc91f67d7579a1d7dfc290dd3d9a69ff041fb8783c68f5452b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2778c4a6fc37bc91f67d7579a1d7dfc290dd3d9a69ff041fb8783c68f5452b50->leave($__internal_2778c4a6fc37bc91f67d7579a1d7dfc290dd3d9a69ff041fb8783c68f5452b50_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c69ebccb26dc21e98dc87585c4db56552c5c177376158ad4fbed01165e1adaf9 = $this->env->getExtension("native_profiler");
        $__internal_c69ebccb26dc21e98dc87585c4db56552c5c177376158ad4fbed01165e1adaf9->enter($__internal_c69ebccb26dc21e98dc87585c4db56552c5c177376158ad4fbed01165e1adaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c69ebccb26dc21e98dc87585c4db56552c5c177376158ad4fbed01165e1adaf9->leave($__internal_c69ebccb26dc21e98dc87585c4db56552c5c177376158ad4fbed01165e1adaf9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9eadfc8bf39007683185c0b1a89b95c3b6f37302db2e5f5040a916d0d27342e6 = $this->env->getExtension("native_profiler");
        $__internal_9eadfc8bf39007683185c0b1a89b95c3b6f37302db2e5f5040a916d0d27342e6->enter($__internal_9eadfc8bf39007683185c0b1a89b95c3b6f37302db2e5f5040a916d0d27342e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9eadfc8bf39007683185c0b1a89b95c3b6f37302db2e5f5040a916d0d27342e6->leave($__internal_9eadfc8bf39007683185c0b1a89b95c3b6f37302db2e5f5040a916d0d27342e6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_692930cc969bbda548fd4bac88d157b804479669e5df02bf203ddabd85e9e89c = $this->env->getExtension("native_profiler");
        $__internal_692930cc969bbda548fd4bac88d157b804479669e5df02bf203ddabd85e9e89c->enter($__internal_692930cc969bbda548fd4bac88d157b804479669e5df02bf203ddabd85e9e89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_692930cc969bbda548fd4bac88d157b804479669e5df02bf203ddabd85e9e89c->leave($__internal_692930cc969bbda548fd4bac88d157b804479669e5df02bf203ddabd85e9e89c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
