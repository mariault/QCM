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
        $__internal_419acd6cf63cc60d2676420d3f2dd78c1f2fef00e87b528062bd2fdd7f682c61 = $this->env->getExtension("native_profiler");
        $__internal_419acd6cf63cc60d2676420d3f2dd78c1f2fef00e87b528062bd2fdd7f682c61->enter($__internal_419acd6cf63cc60d2676420d3f2dd78c1f2fef00e87b528062bd2fdd7f682c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_419acd6cf63cc60d2676420d3f2dd78c1f2fef00e87b528062bd2fdd7f682c61->leave($__internal_419acd6cf63cc60d2676420d3f2dd78c1f2fef00e87b528062bd2fdd7f682c61_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8ea8473c6f6d25ed1dcb94940b55b4e785f42e437ea9295728a27b280e8d74cb = $this->env->getExtension("native_profiler");
        $__internal_8ea8473c6f6d25ed1dcb94940b55b4e785f42e437ea9295728a27b280e8d74cb->enter($__internal_8ea8473c6f6d25ed1dcb94940b55b4e785f42e437ea9295728a27b280e8d74cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8ea8473c6f6d25ed1dcb94940b55b4e785f42e437ea9295728a27b280e8d74cb->leave($__internal_8ea8473c6f6d25ed1dcb94940b55b4e785f42e437ea9295728a27b280e8d74cb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_44bdd71688828fd72548d027e04c2b25b284ac43e00a3878824379c53d9521b5 = $this->env->getExtension("native_profiler");
        $__internal_44bdd71688828fd72548d027e04c2b25b284ac43e00a3878824379c53d9521b5->enter($__internal_44bdd71688828fd72548d027e04c2b25b284ac43e00a3878824379c53d9521b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_44bdd71688828fd72548d027e04c2b25b284ac43e00a3878824379c53d9521b5->leave($__internal_44bdd71688828fd72548d027e04c2b25b284ac43e00a3878824379c53d9521b5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_87ffb21e0f7f5c41ca5cb7f002cf22ae7698b91e44f8d87d381089d7dc8f5961 = $this->env->getExtension("native_profiler");
        $__internal_87ffb21e0f7f5c41ca5cb7f002cf22ae7698b91e44f8d87d381089d7dc8f5961->enter($__internal_87ffb21e0f7f5c41ca5cb7f002cf22ae7698b91e44f8d87d381089d7dc8f5961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_87ffb21e0f7f5c41ca5cb7f002cf22ae7698b91e44f8d87d381089d7dc8f5961->leave($__internal_87ffb21e0f7f5c41ca5cb7f002cf22ae7698b91e44f8d87d381089d7dc8f5961_prof);

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
