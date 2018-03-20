<?php

/* Annonces_coloc.html.twig */
class __TwigTemplate_d41e4dcf4f75df158fd2a392155b56fdb2be72a596d953ec541ce7024385c782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Annonces_coloc.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_115c8fa79e4d998ee3e4d808b79615e053d6942000c720d39f341380312bd56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115c8fa79e4d998ee3e4d808b79615e053d6942000c720d39f341380312bd56b->enter($__internal_115c8fa79e4d998ee3e4d808b79615e053d6942000c720d39f341380312bd56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Annonces_coloc.html.twig"));

        $__internal_516b7e01249f3a1c0d104a009653c18dd231e9cc1d763172de810b34810ad763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516b7e01249f3a1c0d104a009653c18dd231e9cc1d763172de810b34810ad763->enter($__internal_516b7e01249f3a1c0d104a009653c18dd231e9cc1d763172de810b34810ad763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Annonces_coloc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115c8fa79e4d998ee3e4d808b79615e053d6942000c720d39f341380312bd56b->leave($__internal_115c8fa79e4d998ee3e4d808b79615e053d6942000c720d39f341380312bd56b_prof);

        
        $__internal_516b7e01249f3a1c0d104a009653c18dd231e9cc1d763172de810b34810ad763->leave($__internal_516b7e01249f3a1c0d104a009653c18dd231e9cc1d763172de810b34810ad763_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_779dc3a65eae48129b423cf524ee779157c5d25d17075eb185134d8aaf506305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779dc3a65eae48129b423cf524ee779157c5d25d17075eb185134d8aaf506305->enter($__internal_779dc3a65eae48129b423cf524ee779157c5d25d17075eb185134d8aaf506305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b38941e09eccc0519e68a146d9105606c5c9b51d49cf894748c33b89903c068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b38941e09eccc0519e68a146d9105606c5c9b51d49cf894748c33b89903c068->enter($__internal_4b38941e09eccc0519e68a146d9105606c5c9b51d49cf894748c33b89903c068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1><center> Listes  des  Colocations  Proposées </center> </h1>
    
";
        
        $__internal_4b38941e09eccc0519e68a146d9105606c5c9b51d49cf894748c33b89903c068->leave($__internal_4b38941e09eccc0519e68a146d9105606c5c9b51d49cf894748c33b89903c068_prof);

        
        $__internal_779dc3a65eae48129b423cf524ee779157c5d25d17075eb185134d8aaf506305->leave($__internal_779dc3a65eae48129b423cf524ee779157c5d25d17075eb185134d8aaf506305_prof);

    }

    public function getTemplateName()
    {
        return "Annonces_coloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
    <h1><center> Listes  des  Colocations  Proposées </center> </h1>
    
{% endblock %}", "Annonces_coloc.html.twig", "C:\\wamp64\\www\\colocation_test\\app\\Resources\\views\\Annonces_coloc.html.twig");
    }
}
