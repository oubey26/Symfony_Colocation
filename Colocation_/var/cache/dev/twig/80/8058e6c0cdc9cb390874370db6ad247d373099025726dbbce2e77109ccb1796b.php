<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_bb5a0de25ba70970cc329b6285baa3519e02a9312ba373f62387da02121e4165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4ee7bbdbc31e177c75102f77d29f7ff3f896615173827de5743c1dd10cdcdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ee7bbdbc31e177c75102f77d29f7ff3f896615173827de5743c1dd10cdcdf0->enter($__internal_f4ee7bbdbc31e177c75102f77d29f7ff3f896615173827de5743c1dd10cdcdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_5fb4b4256b3a9316c60f5506fb54dd00ceff6b900cd69f5b586da695a60579e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb4b4256b3a9316c60f5506fb54dd00ceff6b900cd69f5b586da695a60579e2->enter($__internal_5fb4b4256b3a9316c60f5506fb54dd00ceff6b900cd69f5b586da695a60579e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ee7bbdbc31e177c75102f77d29f7ff3f896615173827de5743c1dd10cdcdf0->leave($__internal_f4ee7bbdbc31e177c75102f77d29f7ff3f896615173827de5743c1dd10cdcdf0_prof);

        
        $__internal_5fb4b4256b3a9316c60f5506fb54dd00ceff6b900cd69f5b586da695a60579e2->leave($__internal_5fb4b4256b3a9316c60f5506fb54dd00ceff6b900cd69f5b586da695a60579e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3fb3d22f613fb8c2823a182a88181e2d624eac837a0a14bd26abec0b475c06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fb3d22f613fb8c2823a182a88181e2d624eac837a0a14bd26abec0b475c06b->enter($__internal_e3fb3d22f613fb8c2823a182a88181e2d624eac837a0a14bd26abec0b475c06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a598810eda64057045483b3dc7f4087f0953bc4775d10316edeb5c530325878c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a598810eda64057045483b3dc7f4087f0953bc4775d10316edeb5c530325878c->enter($__internal_a598810eda64057045483b3dc7f4087f0953bc4775d10316edeb5c530325878c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a598810eda64057045483b3dc7f4087f0953bc4775d10316edeb5c530325878c->leave($__internal_a598810eda64057045483b3dc7f4087f0953bc4775d10316edeb5c530325878c_prof);

        
        $__internal_e3fb3d22f613fb8c2823a182a88181e2d624eac837a0a14bd26abec0b475c06b->leave($__internal_e3fb3d22f613fb8c2823a182a88181e2d624eac837a0a14bd26abec0b475c06b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
