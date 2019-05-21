<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d804e45b38cfaf921ab4dc769375dbc3bf06776b9d91e816d8bccb82e8d272d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f06000ab40f151b40d00e40f9b640d804972acd3fb33585b6a3b9e62161b7de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06000ab40f151b40d00e40f9b640d804972acd3fb33585b6a3b9e62161b7de7->enter($__internal_f06000ab40f151b40d00e40f9b640d804972acd3fb33585b6a3b9e62161b7de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a3e87afa7eb454dd5b4d197520bc7b28ed89707c46f4b1ce14c01ce53f0d36ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e87afa7eb454dd5b4d197520bc7b28ed89707c46f4b1ce14c01ce53f0d36ce->enter($__internal_a3e87afa7eb454dd5b4d197520bc7b28ed89707c46f4b1ce14c01ce53f0d36ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f06000ab40f151b40d00e40f9b640d804972acd3fb33585b6a3b9e62161b7de7->leave($__internal_f06000ab40f151b40d00e40f9b640d804972acd3fb33585b6a3b9e62161b7de7_prof);

        
        $__internal_a3e87afa7eb454dd5b4d197520bc7b28ed89707c46f4b1ce14c01ce53f0d36ce->leave($__internal_a3e87afa7eb454dd5b4d197520bc7b28ed89707c46f4b1ce14c01ce53f0d36ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
