<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1fa91b2c2c2cbbf5307b8c3c68daf1f9b1dee147fbe6676e515e5abe17954a4e extends Twig_Template
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
        $__internal_ac2042b4c2cf92560c4f48493271c29def3a5d9f1e6b882ac27ec470eb46ddba = $this->env->getExtension("native_profiler");
        $__internal_ac2042b4c2cf92560c4f48493271c29def3a5d9f1e6b882ac27ec470eb46ddba->enter($__internal_ac2042b4c2cf92560c4f48493271c29def3a5d9f1e6b882ac27ec470eb46ddba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ac2042b4c2cf92560c4f48493271c29def3a5d9f1e6b882ac27ec470eb46ddba->leave($__internal_ac2042b4c2cf92560c4f48493271c29def3a5d9f1e6b882ac27ec470eb46ddba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f878b79392a405dc6f71bbd2a9814a73da98ce1591fde6a599610ca6214b5e6 = $this->env->getExtension("native_profiler");
        $__internal_9f878b79392a405dc6f71bbd2a9814a73da98ce1591fde6a599610ca6214b5e6->enter($__internal_9f878b79392a405dc6f71bbd2a9814a73da98ce1591fde6a599610ca6214b5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9f878b79392a405dc6f71bbd2a9814a73da98ce1591fde6a599610ca6214b5e6->leave($__internal_9f878b79392a405dc6f71bbd2a9814a73da98ce1591fde6a599610ca6214b5e6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_89c07d2b932e3aee8a6a5444b1bc1ad22759d66cab167168c6db1ac17c37a327 = $this->env->getExtension("native_profiler");
        $__internal_89c07d2b932e3aee8a6a5444b1bc1ad22759d66cab167168c6db1ac17c37a327->enter($__internal_89c07d2b932e3aee8a6a5444b1bc1ad22759d66cab167168c6db1ac17c37a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_89c07d2b932e3aee8a6a5444b1bc1ad22759d66cab167168c6db1ac17c37a327->leave($__internal_89c07d2b932e3aee8a6a5444b1bc1ad22759d66cab167168c6db1ac17c37a327_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_159fc821fb46d0d3ad6e1aa8357e143b114d79e6f1fecdc01e1141ab505c5f97 = $this->env->getExtension("native_profiler");
        $__internal_159fc821fb46d0d3ad6e1aa8357e143b114d79e6f1fecdc01e1141ab505c5f97->enter($__internal_159fc821fb46d0d3ad6e1aa8357e143b114d79e6f1fecdc01e1141ab505c5f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_159fc821fb46d0d3ad6e1aa8357e143b114d79e6f1fecdc01e1141ab505c5f97->leave($__internal_159fc821fb46d0d3ad6e1aa8357e143b114d79e6f1fecdc01e1141ab505c5f97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
